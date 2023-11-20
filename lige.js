var $field = $('input'),
    $zoomBtn = $('.zoomBtn'),
    $closeBtn = $('.closeBtn'),
    $overlay = $('.overlay');

$field.on('focus', function() {
  $(this).parent().addClass('focus');
  $(this).parent().removeClass('active');
})

$field.on('blur', function() {
  $(this).parent().removeClass('focus');
  
  if ($(this).val() !== "") {
    $(this).parent().addClass('active');
  } else {
    $(this).parent().removeClass('active');
  }
});

function closeZoom() {
    $closeBtn.parent().removeClass('zoomOn');
    $overlay.removeClass('open');  
}


$zoomBtn.on('click', function() {
    $(this).parent().addClass('zoomOn');
    $overlay.addClass('open');
});

$closeBtn.on('click', function() {
  closeZoom();
});

$overlay.click(function() {
  closeZoom();
})

$(document).keyup(function(e) {
     if (e.keyCode == 27) { // escape key maps to keycode `27`
      closeZoom();
    }
});

// Setup Cleave.js
var cleaveCreditCard = new Cleave('.credit_card_number', {
    creditCard:              true,
    onCreditCardTypeChanged: function (type) {
        if (selectedCardIcon) {
            DOM.removeClass(selectedCardIcon, 'active');
        }

        selectedCardIcon = DOM.select('.icon-' + type);

        if (selectedCardIcon) {
            DOM.addClass(selectedCardIcon, 'active');
        }
    }
});
