/**
 * Created by sbaumann on 15.06.14.
 */

(function () {
    window.addEvent('domready', function () {

        window.addEvent('keydown:keys(control)', function () {
            showRowId();
        });

        window.addEvent('keyup:keys(control)', function () {
            hideRowId();
        });

        function showRowId() {
            $$('#main .showRowId').each(function (el) {
                $(el).setStyles({
                    visibility: 'visible'
                });
            });
        }

        function hideRowId() {
            $$('#main .showRowId').each(function (el) {
                $(el).setStyles({
                    visibility: 'hidden'
                });
            });
        }
    });
})();

