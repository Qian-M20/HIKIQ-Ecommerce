!function(p,g,f,m){p(function(){String.prototype.trim||(String.prototype.trim=function(){return this.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,"")});var t=f.template("wc-tax-table-row"),s=f.template("wc-tax-table-row-empty"),c=f.template("wc-tax-table-pagination"),e=p(".wc_tax_rates"),u=p("#rates"),a=p(':input[name="save"]'),d=p("#rates-pagination"),n=p("#rates-search .wc-tax-rates-search-field"),i=p(".submit .button-primary[type=submit]"),r=Backbone.Model.extend({changes:{},setRateAttribute:function(t,e,a){var n=_.indexBy(this.get("rates"),"tax_rate_id"),i={};n[t][e]!==a&&(i[t]={},i[t][e]=a,n[t][e]=a),this.logChanges(i)},logChanges:function(t){var a=this.changes||{};_.each(t,function(t,e){a[e]=_.extend(a[e]||{tax_rate_id:e},t)}),this.changes=a,this.trigger("change:rates")},getFilteredRates:function(){var t=this.get("rates"),e=n.val().toLowerCase();return e.length&&(t=_.filter(t,function(t){return-1!==_.toArray(t).join(" ").toLowerCase().indexOf(e)})),t=_.sortBy(t,function(t){return parseInt(t.tax_rate_order,10)})},block:function(){p(".wc_tax_rates").block({message:null,overlayCSS:{background:"#fff",opacity:.6}})},unblock:function(){p(".wc_tax_rates").unblock()},save:function(){var a=this;a.block(),Backbone.ajax({method:"POST",dataType:"json",url:m+(0<m.indexOf("?")?"&":"?")+"action=woocommerce_tax_rates_save_changes",data:{current_class:g.current_class,wc_tax_nonce:g.wc_tax_nonce,changes:a.changes},success:function(t,e){"success"===e&&t.success&&(l.set("rates",t.data.rates),l.trigger("change:rates"),l.changes={},l.trigger("saved:rates"),h.render()),a.unblock()}})}}),o=Backbone.View.extend({rowTemplate:t,per_page:g.limit,page:g.page,initialize:function(){var t=Math.ceil(_.toArray(this.model.get("rates")).length/this.per_page);this.qty_pages=0===t?1:t,this.page=this.sanitizePage(g.page),this.listenTo(this.model,"change:rates",this.setUnloadConfirmation),this.listenTo(this.model,"saved:rates",this.clearUnloadConfirmation),u.on("change autocompletechange",":input",{view:this},this.updateModelOnChange),n.on("keyup search",{view:this},this.onSearchField),d.on("click","a",{view:this},this.onPageChange),d.on("change","input",{view:this},this.onPageChange),p(window).on("beforeunload",{view:this},this.unloadConfirmation),i.on("click",{view:this},this.onSubmit),a.prop("disabled",!0),e.find(".insert").on("click",{view:this},this.onAddNewRow),e.find(".remove_tax_rates").on("click",{view:this},this.onDeleteRow),e.find(".export").on("click",{view:this},this.onExport)},render:function(){var t=this.model.getFilteredRates(),e=_.size(t),a=Math.ceil(e/this.per_page),n=0===e?0:this.per_page*(this.page-1),i=this.per_page*this.page,r=_.toArray(t).slice(n,i),o=this;this.$el.empty(),r.length?p.each(r,function(t,e){o.$el.append(o.rowTemplate(e))}):o.$el.append(s()),this.$el.find("td.country input").autocomplete({source:g.countries,minLength:2}),this.$el.find("td.state input").autocomplete({source:g.states,minLength:3}),this.$el.find("td.postcode input, td.city input").change(function(){p(this).attr("name",p(this).data("name"))}),1<a?d.html(c({qty_rates:e,current_page:this.page,qty_pages:a})):(d.empty(),o.page=1)},updateUrl:function(){if(window.history.replaceState){var t=g.base_url,e=n.val();1<this.page&&(t+="&p="+encodeURIComponent(this.page)),e.length&&(t+="&s="+encodeURIComponent(e)),window.history.replaceState({},"",t)}},onSubmit:function(t){t.data.view.model.save(),t.preventDefault()},onAddNewRow:function(t){var e,a,n,i,r=t.data.view,o=r.model,s=_.indexBy(o.get("rates"),"tax_rate_id"),c={},d=_.size(s),l=_.extend({},g.default_rate,{tax_rate_id:"new-"+d+"-"+Date.now(),newRow:!0});(e=u.children(".current")).length?(a=e.last().data("id"),n=parseInt(s[a].tax_rate_order,10),l.tax_rate_order=1+n,i=_.filter(s,function(t){return parseInt(t.tax_rate_order,10)>n}),_.map(i,function(t){return t.tax_rate_order++,c[t.tax_rate_id]=_.extend(c[t.tax_rate_id]||{},{tax_rate_order:t.tax_rate_order}),t})):(l.tax_rate_order=1+_.max(_.pluck(s,"tax_rate_order"),function(t){return parseInt(t,10)}),r.page=r.qty_pages),s[l.tax_rate_id]=l,c[l.tax_rate_id]=l,o.set("rates",s),o.logChanges(c),r.render()},onDeleteRow:function(t){var e,a,n=t.data.view,i=n.model,r=_.indexBy(i.get("rates"),"tax_rate_id"),o={};t.preventDefault(),(e=u.children(".current"))?(e.each(function(){a=p(this).data("id"),delete r[a],o[a]=_.extend(o[a]||{},{deleted:"deleted"})}),i.set("rates",r),i.logChanges(o),n.render()):window.alert(g.strings.no_rows_selected)},onSearchField:function(t){t.data.view.updateUrl(),t.data.view.render()},onPageChange:function(t){var e=p(t.currentTarget);t.preventDefault(),t.data.view.page=e.data("goto")?e.data("goto"):e.val(),t.data.view.render(),t.data.view.updateUrl()},onExport:function(t){var n="data:application/csv;charset=utf-8,"+g.strings.csv_data_cols.join(",")+"\n";return p.each(t.data.view.model.getFilteredRates(),function(t,e){var a="";a+=e.tax_rate_country+",",a+=e.tax_rate_state+",",a+=(e.postcode?e.postcode.join("; "):"")+",",a+=(e.city?e.city.join("; "):"")+",",a+=e.tax_rate+",",a+=e.tax_rate_name+",",a+=e.tax_rate_priority+",",a+=e.tax_rate_compound+",",a+=e.tax_rate_shipping+",",a+=g.current_class,n+=a+"\n"}),p(this).attr("href",encodeURI(n)),!0},setUnloadConfirmation:function(){this.needsUnloadConfirm=!0,a.prop("disabled",!1)},clearUnloadConfirmation:function(){this.needsUnloadConfirm=!1,a.prop("disabled",!0)},unloadConfirmation:function(t){if(t.data.view.needsUnloadConfirm)return t.returnValue=g.strings.unload_confirmation_msg,window.event.returnValue=g.strings.unload_confirmation_msg,g.strings.unload_confirmation_msg},updateModelOnChange:function(t){var e=t.data.view.model,a=p(t.target),n=a.closest("tr").data("id"),i=a.data("attribute"),r=a.val();"city"!==i&&"postcode"!==i||(r=r.split(";"),r=p.map(r,function(t){return t.trim()})),"tax_rate_compound"!==i&&"tax_rate_shipping"!==i||(r=a.is(":checked")?1:0),e.setRateAttribute(n,i,r)},sanitizePage:function(t){return(t=parseInt(t,10))<1?t=1:t>this.qty_pages&&(t=this.qty_pages),t}}),l=new r({rates:g.rates}),h=new o({model:l,el:"#rates"});h.render()})}(jQuery,htmlSettingsTaxLocalizeScript,wp,ajaxurl);