jQuery(document).ready(function(a){a(".upload_button").click(function(b){b.preventDefault();var c=a(this).prev(),d=a(this).parent().find(".img-preview"),e=wp.media({title:"Upload Image",multiple:!1,displaySettings:!0,displayUserSettings:!1}).open().on("select",function(){var a=e.state().get("selection").first(),b=a.toJSON().url;c.val(b),d.attr("src",b)})})});