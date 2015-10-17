define(["js/config", 'modules/start/start', "js/router"],
    function(config, AppView, Router)
{
    "use strict";

    config.Router = new Router();
    Backbone.history.start();

    //{pushState: true, root: config.root}

    var appView = new AppView();
    appView.render();
});
