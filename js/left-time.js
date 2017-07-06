(function(){

    'use strict';

    Number.prototype.pad = function() {
        return this > 9 ? this : '0' + this;
    };

    $.fn.leftTime = function () {

        var m = {},
            e = [];

        m.go = function(index) {
            var t = [],
                tTime = e[index].leftTime;
            for (var i = 0; i < 3; i++)
            {
                t[i] = (tTime % 60).pad();
                tTime = Math.floor(tTime/60);
            }
            e[index].elem.html(t.reverse().join(':'));

            e[index].leftTime--;
            if (e[index].leftTime >= 0)
                setTimeout(m.go, 1000, index);
        };

        m.init = function (index, element) {

            e[index] = {
                elem:  $(element),
                leftTime: $(element).data('seconds')
            };

            m.go(index);
        };

        return this.each(m.init);
    };

})($);