var BtyBug = {
    my_window: null,
    result: null,
    init: function (client_id, client_secret) {
        this.client_secret = client_secret;
        this.client_id = client_id;
    },
    login: {
        url: 'http://forms.albumbugs.com/bty-api/authorize',
        data: {
            'client_id': null,
            'redirect_uri': null,
            'response_type': 'code',
            'scope': '*'
        }
    },
    callwindow: function (callback) {
        // console.log(callback(123));
        this.login.data.client_id = this.client_id;
        var strWindowFeatures = "location=yes,resizable=yes,scrollbars=yes,status=yes";
        var my_window = window;
        my_window.cms = {
            callback: callback,
            done: function () {
                my_window.close();
            }
        };
        my_window.open(this.login.url + '?' + $.param(this.login.data), "popupWindow", 'height=500,width=500');
        // this.my_window.proto
    },
    postSendAjax: function (url, data, success, error) {

        var xhr = new XMLHttpRequest();
        xhr.open('PUT', url);
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.onload = function() {
            if (xhr.status === 200) {
                var data = JSON.parse(xhr.responseText);
                if (success) {
                    success(data);
                }
                return data;
            }else{
                var errorThrown = xhr.status;
                if (error) {
                    error(errorThrown);
                }
                return errorThrown;
            }
        };

        xhr.send(JSON.stringify(data));

        // $.ajax({
        //     type: 'post',
        //     url: url,
        //     cache: false,
        //     datatype: "json",
        //     data: data,
        //     success: function (data) {
        //         if (success) {
        //             success(data);
        //         }
        //         return data;
        //     },
        //     error: function (errorThrown) {
        //         if (error) {
        //             error(errorThrown);
        //         }
        //         return errorThrown;
        //     }
        // });
    }
};
