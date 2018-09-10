Perch.UserConfig.markitup = function(){

  var get = function(profile, config, field) {

    var markdownSettings = {
      nameSpace: 'markdown',
      previewParserPath:  '',
      onTab: {keepDefault:false, openWith:'    '},
      onShiftEnter:   {keepDefault:false, openWith:'\n\n'},
      markupSet: [
        {name:'Heading', key:'1', className:'fa fa-header', dropMenu: [
          // {name:'Heading 1', className:'fa fa-header', openWith:'# ',    placeHolder:'Your title here...' },
          {name:'Heading 2', className:'fa fa-header', openWith:'## ',   placeHolder:'Your title here...' },
          {name:'Heading 3', className:'fa fa-header', openWith:'### ',    placeHolder:'Your title here...' },
          // {name:'Heading 4', className:'fa fa-header', openWith:'#### ',   placeHolder:'Your title here...' },
          // {name:'Heading 5', className:'fa fa-header', openWith:'##### ',  placeHolder:'Your title here...' },
          // {name:'Heading 6', className:'fa fa-header', openWith:'###### ', placeHolder:'Your title here...' }
        ]},
        {name:'Bold', className:'fa fa-bold', key:'B', openWith:'**', closeWith:'**'},
        {name:'Italic', className:'fa fa-italic', key:'I', openWith:'_', closeWith:'_'},
        {name:'Quotes', className:'fa fa-quote-left', openWith:'> '},
        {name:'Bulleted List', className:'fa fa-list-ul', openWith:'+ ' },
        {name:'Numeric List', className:'fa fa-list-ol', openWith:function(markItUp) {
          return markItUp.line+'. ';
        }},
        // {name:'Picture', className:'image-upload fa fa-picture-o', openWith:function(markItUp){miu.PerchAssets.upload(markItUp,'markdown');}},
        // {name:'File', className:'file-upload fa fa-file-o', openWith:function(markItUp){miu.PerchAssets.upload(markItUp,'markdown',true);}},
        // {name:'Link', className:'fa fa-link', key:'L', openWith:'[', closeWith:']([![URL:!:http://]!] "[![Title]!]")', placeHolder:'Your text to link here...' }
        {name:'Link', className:'fa fa-link', key:'L', openWith:'[', closeWith:']([![URL:!:http://]!])', placeHolder:'Your text to link here...' }
      ]
    };

    return markdownSettings;
  };

  var load = function(cb) {
    cb();
  };

  return  {
    'get': get,
    'load': load
  }
}();
