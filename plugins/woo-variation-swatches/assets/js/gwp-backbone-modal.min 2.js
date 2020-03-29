!function(n,t,a){"use strict";n.fn.GWPBackboneModal=function(t){return this.each(function(){new n.GWPBackboneModal(n(this),t)})},n.GWPBackboneModal=function(t,e){var a=n.extend({},n.GWPBackboneModal.defaultOptions,e);a.template&&new n.GWPBackboneModal.View({target:a.template,string:a.data})},n.GWPBackboneModal.defaultOptions={template:"",data:{}},n.GWPBackboneModal.View=t.View.extend({tagName:"div",id:"gwp-backbone-modal-dialog",_target:void 0,_string:void 0,events:{"click .modal-close":"closeButton","click #btn-ok":"addButton","click #send-ajax":"sendAjax","touchstart #btn-ok":"addButton",keydown:"keyboardActions","change :radio":"optionChange"},resizeContent:function(){var t=n(".gwp-backbone-modal-content").find("article"),e=.75*n(window).height();t.css({"max-height":e+"px"})},initialize:function(t){var e=this;this._target=t.target,this._string=t.string,a.bindAll(this,"render"),this.render(),n(window).resize(function(){e.resizeContent()})},render:function(){var t=wp.template(this._target);this.$el.append(t(this._string)),n(document.body).css({overflow:"hidden"}).append(this.$el),this.resizeContent(),this.$(".gwp-backbone-modal-content").attr("tabindex","0").focus(),n(document.body).trigger("gwp_backbone_modal_loaded",this._target)},closeButton:function(t){t.preventDefault(),n(document.body).trigger("gwp_backbone_modal_before_remove",this._target),this.undelegateEvents(),n(document).off("focusin"),n(document.body).css({overflow:"auto"}),this.remove(),n(document.body).trigger("gwp_backbone_modal_removed",this._target)},addButton:function(t){n(document.body).trigger("gwp_backbone_modal_response",[this._target,this.getFormData()]),this.closeButton(t)},sendAjax:function(t){var e=this;t.preventDefault();var a=this.getFormData(),o=this._string;void 0!==a.reason_type?(n(t.target).prop("disabled",!0).text(n(t.target).data("deactivating")).next().addClass("visible"),wp.ajax.send(a.action,{form:a,success:function(){window.location.replace(o.deactivate_link),e.closeButton(t)},error:function(){window.location.replace(o.deactivate_link),e.closeButton(t)}})):this.closeButton(t)},optionChange:function(t){n(t.target).closest(".feedback-dialog-form-body").find(".feedback-text").prop("disabled",!0).hide(),n(t.target).nextAll(".feedback-text").prop("disabled",!1).show().focus()},getFormData:function(){var a={};return n(document.body).trigger("gwp_backbone_modal_before_update",this._target),n.each(n("form",this.$el).serializeArray(),function(t,e){-1!==e.name.indexOf("[]")?(e.name=e.name.replace("[]",""),a[e.name]=n.makeArray(a[e.name]),a[e.name].push(e.value)):a[e.name]=e.value}),a},keyboardActions:function(t){var e=t.keyCode||t.which;13!==e||t.target.tagName&&("input"===t.target.tagName.toLowerCase()||"textarea"===t.target.tagName.toLowerCase())||this.addButton(t),27===e&&this.closeButton(t)}})}(jQuery,Backbone,_);