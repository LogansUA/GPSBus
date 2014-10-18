$(function() {
    $('.datepicker').datepicker();
    $('.uniform_on').uniform();
    $('.chzn-select').chosen();
    $('.selectize-select').selectize();
    $('.textarea-wysihtml5').wysihtml5({
    stylesheets: [
    'vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/stylesheets/bootstrap-wysihtml5/wysiwyg-color.css'
    ]
    });

    $('#rootwizard').bootstrapWizard({
    'nextSelector': '.next',
    'previousSelector': '.previous',
    onNext: function(tab, navigation, index) {
    var $total = navigation.find('li').length;
    var $current = index + 1;
    var $percent = ($current / $total) * 100;
    $('#rootwizard').find('.progress-bar').css('width', $percent + '%');
    // If it's the last tab then hide the last button and show the finish instead
    if ($current >= $total) {
    $('#rootwizard').find('.pager .next').hide();
    $('#rootwizard').find('.pager .finish').show();
    $('#rootwizard').find('.pager .finish').removeClass('disabled');
    } else {
    $('#rootwizard').find('.pager .next').show();
    $('#rootwizard').find('.pager .finish').hide();
    }
    },
    onPrevious: function(tab, navigation, index) {
    var $total = navigation.find('li').length;
    var $current = index + 1;
    var $percent = ($current / $total) * 100;
    $('#rootwizard').find('.progress-bar').css('width', $percent + '%');
    // If it's the last tab then hide the last button and show the finish instead
    if ($current >= $total) {
    $('#rootwizard').find('.pager .next').hide();
    $('#rootwizard').find('.pager .finish').show();
    $('#rootwizard').find('.pager .finish').removeClass('disabled');
    } else {
    $('#rootwizard').find('.pager .next').show();
    $('#rootwizard').find('.pager .finish').hide();
    }
    },
    onTabShow: function(tab, navigation, index) {
    var $total = navigation.find('li').length;
    var $current = index + 1;
    var $percent = ($current / $total) * 100;
    $('#rootwizard').find('.bar').css({width: $percent + '%'});
    }
    });
    $('#rootwizard .finish').click(function() {
    alert('Finished!, Starting over!');
    $('#rootwizard').find('a[href*=\'tab1\']').trigger('click');
    });
    });