var hospitalApp = angular.module('hospitalApp', ['mainCtrl', 'hospitalService', 'xeditable', 'truncate']);

app.run(function(editableOptions, editableThemes) {
	// set `default` theme
  	editableOptions.theme = 'default'; // bootstrap3 theme. Can be also 'bs2', 'default'
  // overwrite submit button template
  	editableThemes['default'].submitTpl = '<button type="submit" calss="btn bg-olive btn-flat">ok</button>';
  	
});
