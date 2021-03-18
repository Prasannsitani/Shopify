var qtyUp = $('.qty-up');
var qtyDown = $('.qty-down');
var qtyInput = $('.qty-input');

// Increase value of input tag
qtyUp.on('click', function() {
    if(qtyInput.val() < 10 && qtyInput.val() >= 1) {
        qtyInput.val((i, old) => {
            return ++old;
        });    
    }
});

// Decrease Value of input tag
qtyDown.click(function() {
    if(qtyInput.val() <= 10 && qtyInput.val() > 1) {
        qtyInput.val((i, old) => {
            return --old;
        });    
    }
});

