/* https://github.com/DiemenDesign/summernote-image-attributes */
(function (factory) {
  if (typeof define === 'function' && define.amd) {
    define(['jquery'], factory);
  } else if (typeof module === 'object' && module.exports) {
    module.exports = factory(require('jquery'));
  } else {
    factory(window.jQuery);
  }
}(function ($) {
  var readFileAsDataURL = function (file) {
    return $.Deferred( function (deferred) {
      $.extend(new FileReader(),{
        onload: function (e) {
          var sDataURL = e.target.result;
          deferred.resolve(sDataURL);
        },
        onerror: function () {
          deferred.reject(this);
        }
      }).readAsDataURL(file);
    }).promise();
  };
  $.extend(true,$.summernote.lang, {
    'en-US': { /* US English(Default Language) */
      imageAttributes: {
        dialogTitle: '<i class="fas fa-sm fa-edit"></i> Image Attributes',
        tooltip: 'Image Attributes',
        tabImage: 'Image',
          src: 'Source',
          browse: 'Browse',
          title: 'Title',
          alt: 'Alt Text',
          dimensions: 'Dimensions',
        tabAttributes: 'Attributes',
          class: 'Class',
          style: 'Style',
        tabBrowse: 'Browse',
        editBtn: '<span class="icon"><i class="fas fa-save"></i></span> <span class="text">Save</span>'
      }
    }
  });
  $.extend($.summernote.options, {
    imageAttributes: {
      icon: '<i class="fas fa-sm fa-edit"/>',
      removeEmpty: true,
      disableUpload: false,
      imageFolder: ''
    }
  });
  $.extend($.summernote.plugins, {
    'imageAttributes': function (context) {
      var self      = this,
          ui        = $.summernote.ui,
          $note     = context.layoutInfo.note,
          $editor   = context.layoutInfo.editor,
          $editable = context.layoutInfo.editable,
          options   = context.options,
          lang      = options.langInfo
      if(! ('_counter' in $.summernote.options.imageAttributes)) {
        $.summernote.options.imageAttributes._counter = 0;
      }
      context.memo('button.imageAttributes', function() {
        var button = ui.button({
          contents: options.imageAttributes.icon,
          container: "body",
          tooltip:  lang.imageAttributes.tooltip,
          click: function () {
            context.invoke('imageAttributes.show');
          }
        });
        return button.render();
      });
      this.initialize = function () {
        var $container = options.dialogsInBody ? $(document.body) : $editor;
        $.summernote.options.imageAttributes._counter++;
        var i = $.summernote.options.imageAttributes._counter;
        // console.log('indice for imageAttribute : ', i);
        var body = '<ul class="nav note-nav nav-tabs note-nav-tabs">' +
                      '<li class="nav-item note-nav-item active"><a class="nav-link note-nav-link active" href="#note-imageAttributes-' + i + '" data-toggle="tab">' + lang.imageAttributes.tabImage + '</a></li>' +
                      '<li class="nav-item note-nav-item"><a class="nav-link note-nav-link" href="#note-imageAttributes-attributes-' + i + '" data-toggle="tab">' + lang.imageAttributes.tabAttributes + '</a></li>';
        body +=     '</ul>' +
                    '<div class="tab-content">' +
// Tab 2
                    '<div class="tab-pane note-tab-pane py-3" id="note-imageAttributes-attributes-' + i + '">' +
                      '<div class="note-form-group form-group note-group-imageAttributes-class">' +
                        '<label class="control-label note-form-label col-sm-3">' + lang.imageAttributes.class + '</label>' +
                        '<div class="input-group note-input-group col-xs-12 col-sm-12">' +
                          '<input class="note-imageAttributes-class form-control note-form-control note-input" type="text">' +
                        '</div>' +
                      '</div>' +
                      '<div class="note-form-group form-group note-group-imageAttributes-style">' +
                        '<label class="control-label note-form-label col-sm-3">' + lang.imageAttributes.style + '</label>' +
                        '<div class="input-group note-input-group col-xs-12 col-sm-12">' +
                          '<input class="note-imageAttributes-style form-control note-form-control note-input" type="text">' +
                        '</div>' +
                      '</div>' +
                    '</div>';
// Tab 1
        body +=     '<div class="tab-pane note-tab-pane fade in active show py-3" id="note-imageAttributes-' + i + '">' +
                      '<div class="note-form-group form-group note-group-imageAttributes-url">' +
                        '<label class="control-label note-form-label col-sm-3">' + lang.imageAttributes.src + '</label>' +
                        '<div class="input-group note-input-group col-xs-12 col-sm-12">' +
                          '<input class="note-imageAttributes-src form-control note-form-control note-input" type="text">' +
                        '</div>' +
                      '</div>' +
                      '<div class="note-form-group form-group note-group-imageAttributes-title">' +
                        '<label class="control-label note-form-label col-sm-3">' + lang.imageAttributes.title + '</label>' +
                        '<div class="input-group note-input-group col-xs-12 col-sm-12">' +
                          '<input class="note-imageAttributes-title form-control note-form-control note-input" type="text">' +
                        '</div>' +
                      '</div>' +
                    '</div>' +
                  '</div>';
        this.$dialog=ui.dialog({
          title:  lang.imageAttributes.dialogTitle,
          body:   body,
          footer: '<button href="#" class="btn btn-primary note-btn note-btn-primary note-imageAttributes-btn">' + lang.imageAttributes.editBtn + '</button>'
        }).render().appendTo($container);
      };
      this.destroy = function () {
        ui.hideDialog(this.$dialog);
        this.$dialog.remove();
      };
      this.bindEnterKey = function ($input,$btn) {
        $input.on('keypress', function (e) {
          if (e.keyCode === 13) $btn.trigger('click');
        });
      };
      this.bindLabels = function () {
        self.$dialog.find('.form-control:first').focus().select();
        self.$dialog.find('label').on('click', function () {
          $(this).parent().find('.form-control:first').focus();
        });
      };
      this.show = function () {
        var $img    = $($editable.data('target'));
        var imgInfo = {
          imgDom:  $img,
          title:   $img.attr('title'),
          src:     $img.attr('src'),
          class:   $img.attr('class'),
          style:   $img.attr('style'),
          imgLink: $($img).parent().is("a") ? $($img).parent() : null
        };
        this.showImageAttributesDialog(imgInfo).then( function (imgInfo) {
          ui.hideDialog(self.$dialog);
          var $img = imgInfo.imgDom;
          if (options.imageAttributes.removeEmpty) {
            if (imgInfo.title)  $img.attr('title', imgInfo.title);  else $img.removeAttr('title');
            if (imgInfo.src)    $img.attr('src',   imgInfo.src);    else $img.attr('src', '#');
            if (imgInfo.class)  $img.attr('class', imgInfo.class);  else $img.removeAttr('class');
            if (imgInfo.style)  $img.attr('style', imgInfo.style);  else $img.removeAttr('style');
          } else {
            if (imgInfo.src)    
            $img.attr('src',   imgInfo.src);   
            else $img.attr('src', '#');
            $img.attr('title',  imgInfo.title);
            $img.attr('class',  imgInfo.class);
            $img.attr('style',  imgInfo.style);
          }
          if($img.parent().is("a")) $img.unwrap();
          if (imgInfo.linkHref) {
            var linkBody = '<a';
            if (imgInfo.linkClass) linkBody += ' class="' + imgInfo.linkClass + '"';
            if (imgInfo.linkStyle) linkBody += ' style="' + imgInfo.linkStyle + '"';
            linkBody += ' href="' + imgInfo.linkHref + '" target="' + imgInfo.linkTarget + '"';
            if (imgInfo.linkRel) linkBody += ' rel="' + imgInfo.linkRel + '"';
            linkBody += '></a>';
            $img.wrap(linkBody);
          }
          $note.val(context.invoke('code'));
          $note.change();
        });
      };
      this.showImageAttributesDialog = function (imgInfo) {
        return $.Deferred( function (deferred) {
          var $imageTitle  = self.$dialog.find('.note-imageAttributes-title'),
              $imageInput  = self.$dialog.find('.note-imageAttributes-input'),
              $imageSrc    = self.$dialog.find('.note-imageAttributes-src'),
              $imageClass  = self.$dialog.find('.note-imageAttributes-class'),
              $imageStyle  = self.$dialog.find('.note-imageAttributes-style'),
              $editBtn     = self.$dialog.find('.note-imageAttributes-btn');

          ui.onDialogShown(self.$dialog, function () {
            context.triggerEvent('dialog.shown');
            $imageInput.replaceWith(
              $imageInput.clone().on('change', function () {
                var callbacks = options.callbacks;
                if (callbacks.onImageUpload) {
                  context.triggerEvent('image.upload',this.files[0]);
                } else {
                  readFileAsDataURL(this.files[0]).then( function (dataURL) {
                    $imageSrc.val(dataURL);
                  }).fail( function () {
                    context.triggerEvent('image.upload.error');
                  });
                }
              }).val('')
            );
            $editBtn.click( function (e) {
              e.preventDefault();
              deferred.resolve({
                imgDom:     imgInfo.imgDom,
                title:      $imageTitle.val(),
                src:        $imageSrc.val(),
                class:      $imageClass.val(),
                style:      $imageStyle.val(),
              }).then(function (img) {
                context.triggerEvent('change', $editable.html());
              });
            });
            $imageTitle.val(imgInfo.title);
            $imageSrc.val(imgInfo.src);
            $imageClass.val(imgInfo.class);
            $imageStyle.val(imgInfo.style);
            self.bindEnterKey($editBtn);
            self.bindLabels();
          });
          ui.onDialogHidden(self.$dialog, function () {
            $editBtn.off('click');
            if (deferred.state() === 'pending') deferred.reject();
          });
          ui.showDialog(self.$dialog);
        });
      };
    }
  });
}));
