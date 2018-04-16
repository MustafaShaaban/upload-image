function _(e) {
    return document.querySelector(e)
}

_('#btn').addEventListener('click', function () {

    var file = _('#imgInp').files[0],
        formdata = new FormData();
    formdata.append('image', file);

    var ajax = new XMLHttpRequest();

    ajax.onreadystatechange = function () {

        ajax.upload.addEventListener('progress', function (event) {
            
            var percent = (event.loaded / event.total) * 100;

            _('#progress').style.width = percent + "%";
            _('#num').innerHTML = Math.round(percent) + "% please Wait";

            if (percent == 100) { _('#num').innerHTML = "Done"; }

        }, false);


        _('#fileHelpId').innerHTML = ajax.responseText;

    }
    
    ajax.open('POST', 'upload.php', true);
    ajax.send(formdata);

}, false);