
function UrlHelper_HashAdd(hash, value) {
    var s = window.location.hash.substr(1);
    var a = window.location.hash.substr(1).split('!');
    if (s == '' || s == null || a.length == 0) {
        window.location.hash = hash + '=' + value;
    }
    else {
        var ok = false;
        for (var i = 0; i < a.length; i++) {
            var k = a[i].substring(0, a[i].indexOf('='));
            if (k == hash) {
                a[i] = k + '=' + value;
                ok = true;
                break;
            }
        }

        if (!ok)
            a.push(hash + '=' + value);

        window.location.hash = a.join('!');
    }
}

function UrlHelper_HashRemove(hash) {
    var a = window.location.hash.substr(1).split('!');
    if (a.length > 0) {
        var h = new Array();
        a.forEach(function (s) {
            var k = s.substring(0, s.indexOf('='));
            if (k != hash)
                h.push(s);
        });
        window.location.hash = h.join('!');
    }
}

function UrlHelper_HashGet(hash) {
    var a = window.location.hash.substr(1).split('!');
    var v = '';
    if (a.length > 0) {
        a.forEach(function (s) {
            if (v != '')
                return;

            var k = s.substring(0, s.indexOf('='));
            if (k == hash)
                v = s.substring(s.indexOf('=') + 1);
        });
    }
    return v;
}
