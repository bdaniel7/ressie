/**
 * Created by daniel on 30.09.2015.
 */

var require = {
    baseUrl: ".", // js is the base path
    paths: {
        "jquery":       "../bower_components/jquery/dist/jquery",
        "bootstrap":    "../bower_components/bootstrap/dist/js/bootstrap",
        "underscore":   "../bower_components/underscore/underscore",
        "backbone":     "../bower_components/backbone/backbone",
        "text": "js/vendor/require.text",
        "domReady": "js/vendor/require.domReady",
    },
    shim: {
        "bootstrap": { deps: ["jquery"] }
    }
};
