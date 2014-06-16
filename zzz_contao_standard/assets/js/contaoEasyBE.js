/**
 * Created by sbaumann on 15.06.14.
 */

(function () {
    window.addEvent('domready', function () {

        window.addEvent('keydown:keys(shift)', function () {
            showRowId();
        });

        window.addEvent('keyup:keys(shift)', function () {
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

