(function ($) {

})(jQuery);

$(document).ready(function () {

    var json1 = {
        'c': [
            { 'div#s-1.section.s-1': {
                'a': {},
                'd': { 'stauts': '0' },
                'c': [
                        { 'h2.title': { 'a': {}, 'c': []} },
                        { 'div.con': {
                            'a': {},
                            'c': [
                                    { 'ul.list-img.mclearfix': {
                                        'a': {},
                                        'c': [
                                                { 'li': {
                                                    'a': {},
                                                    'c': [
                                                        { 'a.a-img': {
                                                            'a': { 'href': '#', 'target': '_blank', 'title': 'showhint' },
                                                            'c': [
                                                                { 'img': {
                                                                    'a': { 'alt': 'showhint', 'width': '200', 'height': '200', 'src': '#' },
                                                                    'c': []
                                                                }
                                                                },
                                                                { 'img': {
                                                                    'a': { 'alt': 'showhint', 'width': '200', 'height': '200', 'src': '#' },
                                                                    'c': []
                                                                }
                                                                },
                                                                { 'img': {
                                                                    'a': { 'alt': 'showhint', 'width': '200', 'height': '200', 'src': '#' },
                                                                    'c': []
                                                                }
                                                                },
                                                                { 'img': {
                                                                    'a': { 'alt': 'showhint', 'width': '200', 'height': '200', 'src': '#' },
                                                                    'c': []
                                                                }
                                                                }
                                                            ]
                                                        }
                                                        }
                                                    ]
                                                }
                                                }
                                            ]
                                    }
                                    }
                                ]
                        }
                        }
                        ]
            }
            }
        ]
    };

    //parseHtmlJson(json1);
    //filterHtmlTag('div#id.s-1.c2.cd.cf.cd.vd.section');
    parseHtml.View(json1);
});

var parseHtml = {
    Code: { html: [] },
    View: function (json) {
        if (json.c != undefined && json.c.length > 0) {
            for (var i in json.c) {
                if (json.c.length > 0) {
                    for (var j in json.c[i]) {
                        //this.Code.html.push(this.Filter(j, json.c[i][j]));
                        //console.log(json.c[i][j].c.length);
                        this.Code.html[i] = this.Filter(j, json.c[i][j]);
                        console.log(this.Code.html);
                        this.View(json.c[i][j]);
                    }
                } else {

                }
            }
        }
    },
    Filter: function (str, obj) {
        var html, tag, tagId, tagClass, tagAttr = '', tagData = '', tagCon = '', arr1, arr2, str1 = '';

        arr1 = str.split('.');

        //id & class name
        for (var i in arr1) {
            if (i == 0) {
                arr2 = arr1[0].split('#');
                tag = arr2[0];
                tagId = arr2[1] == undefined ? '' : ' id="' + arr2[1] + '"';
                continue;
            }
            if (i == arr1.length - 1) {
                str1 += arr1[i] + '';
                continue;
            }
            str1 += arr1[i] + ' ';
        }
        tagClass = str1 == '' ? '' : ' class="' + str1 + '"';

        //attribute
        if (obj.a != undefined) {
            for (var j in obj.a) {
                tagAttr += ' ' + j + '="' + obj.a[j] + '"';
            }
        }

        //data attribute
        if (obj.d != undefined) {
            for (var k in obj.d) {
                tagAttr += ' data-' + k + '="' + obj.d[k] + '"';
            }
        }

        //content words
        if (obj.w != undefined) {
            tagCon = obj.w;
        }

        //html
        if ($.inArray(tag, ['img', 'br']) != -1) {
            html = '<' + tag + tagId + tagClass + tagAttr + tagData + ' />';
        } else {
            html = '<' + tag + tagId + tagClass + tagAttr + tagData + '>' + tagCon + '</' + tag + '>';
        }

        return html;
    }
};

function parseHtmlJson(json) {

    //console.log(json.c);
    //console.log(json.c.length);

    if (json.c != undefined && json.c.length > 0) {
        for (var i in json.c) {
            //console.log(json.c[i]);
            for (var j in json.c[i]) {
                //console.log(j);
                console.log(filterHtmlElements(j, json.c[i][j]));
                //console.log(json.c[i][j]);
                parseHtmlJson(json.c[i][j]);
            }
        }
    }


}

function filterHtmlElements(str, obj) {//div#id.class
    var html, tag, tagId, tagClass, tagAttr = '', tagData = '', tagCon = '', arr1, arr2, str1 = '';

    arr1 = str.split('.');

    //id & class name
    for (var i in arr1) {
        if (i == 0) {
            arr2 = arr1[0].split('#');
            tag = arr2[0];
            tagId = arr2[1] == undefined ? '' : ' id="' + arr2[1] + '"';
            continue;
        }
        if (i == arr1.length - 1) {
            str1 += arr1[i] + '';
            continue;
        }
        str1 += arr1[i] + ' ';
    }
    tagClass = str1 == '' ? '' : ' class="' + str1 + '"';

    //attribute
    if (obj.a != undefined) {
        for (var j in obj.a) {
            tagAttr += ' ' + j + '="' + obj.a[j] + '"';
        }
    }

    //data attribute
    if (obj.d != undefined) {
        for (var k in obj.d) {
            tagAttr += ' data-' + k + '="' + obj.d[k] + '"';
        }
    }

    //content words
    if (obj.w != undefined) {
        tagCon = obj.w;
    }

    //html
    if ($.inArray(tag, ['img', 'br']) != -1) {
        html = '<' + tag + tagId + tagClass + tagAttr + tagData + ' />';
    } else {
        html = '<' + tag + tagId + tagClass + tagAttr + tagData + '>' + tagCon + '</' + tag + '>';
    }

    return html;
}