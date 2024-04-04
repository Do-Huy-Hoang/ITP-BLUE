$(document).on('click', '.number-spinner button', function () {
    var btn = $(this),
        oldValue = btn.closest('.number-spinner').find('input').val().trim(),
        newVal = 0;

    if (btn.attr('data-dir') == 'up') {
        newVal = parseInt(oldValue) + 1;
    } else {
        if (oldValue > 1) {
            newVal = parseInt(oldValue) - 1;
        } else {
            newVal = 1;
        }
    }
    btn.closest('.number-spinner').find('input').val(newVal);
});

function update_Cart(event) {
    event.preventDefault();
    let urlUpdateCart = $(this).data('url');
    let id = $(this).data('id');
    let quantity = $(this).parents('.ad').find('input.qaty').val();
    $.ajax({
        type: 'GET',
        url: urlUpdateCart,
        data: { pro_id: id, pro_quantity: quantity },
        success: function (data) {
            if (data.code === 200) {
                setInterval(function () { location.reload(); }, 500);
            }
        },
        error: function () {
            console.log("eroor")
        }
    })
}

function delete_Cart(event) {
    event.preventDefault();
    let urlDeleteCart = $(this).data('url');
    let id = $(this).data('id');
    $.ajax({
        type: 'GET',
        url: urlDeleteCart,
        data: { pro_id: id },
        success: function (data) {
            if (data.code === 200) {
                setInterval(function () { location.reload(); }, 500);
            }

        },
        error: function () {

        }
    })
}

$(function () {
    $('#update_Cart').on('click', update_Cart);
    $('#delete_Cart').on('click', delete_Cart);
})

document.addEventListener("DOMContentLoaded", function () {

    var modal = document.getElementById('myImageModal');
    var img = document.getElementsByClassName('img-fluid');
    var modalImg = document.getElementById("img01");
    var span = document.getElementsByClassName("close")[0];


    for (var i = 0; i < img.length; i++) {
        img[i].onclick = function () {
            modal.style.display = "block";
            modalImg.src = this.src;
            document.body.style.overflow = "hidden";
        }
    }

    if (span) {
        span.onclick = function () {
            modal.style.display = "none";
            document.body.style.overflow = "auto";
        }
    }

    if (modal) {
        modal.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
                document.body.style.overflow = "auto";
            }
        }
    }

    if(modalImg){
        modalImg.addEventListener('wheel', function (e) {
            e.preventDefault();
            var delta = e.deltaY || e.detail || e.wheelDelta;
    
            var scaleValue = delta > 0 ? 0.2 : -0.2;
    
            var currentTransform = modalImg.style.transform || 'scale(1)';
            var currentScale = parseFloat(currentTransform.split('(')[1].split(')')[0]);
            var newScale = currentScale + scaleValue;
    
            if (newScale > 5) {
                newScale = 5;
            } else if (newScale < 0.2) {
                newScale = 0.2;
            }
    
            modalImg.style.transform = 'scale(' + newScale + ')';
        });
    
    }  
})
