var BtyBug = {
    my_window: null,
    result: null,
    init: function (client_id, client_secret) {
        console.log(client_id);
        this.client_secret = client_secret;
        this.client_id = client_id;
    },
    login: {
        url: 'http://forms.albumbugs.com/oauth/authorize',
        data: {
            'client_id': null,
            'redirect_uri': 'http://www.albumbugs.com/callback',
            'response_type': 'code',
            'scope': '*'
        }
    },
    callwindow: function () {
        this.login.data.client_id = this.client_id;
        this.my_window = window.open(this.login.url + '?' + $.param(this.login.data), "popupWindow", "width=600,height=600,scrollbars=yes");
    },
    postSendAjax: function (url, data, success, error) {
        $.ajax({
            type: 'post',
            url: url,
            cache: false,
            datatype: "json",
            data: data,
            success: function (data) {
                if (success) {
                    success(data);
                }
                return data;
            },
            error: function (errorThrown) {
                if (error) {
                    error(errorThrown);
                }
                return errorThrown;
            }
        });
    }
};
