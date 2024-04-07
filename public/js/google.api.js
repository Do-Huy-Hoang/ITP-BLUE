const input = document.getElementById('address');
window.onload = function() {
    if(input.value != null){
        calculateRoute();
    }
};
const calculateRoute = async () => {
    const directionsService = new google.maps.DirectionsService();
    try {
        const results = await new Promise((resolve, reject) => {
            directionsService.route({
                origin: "475A Đ. Điện Biên Phủ, Phường 25, Bình Thạnh, Thành phố Hồ Chí Minh, Việt Nam",
                destination: input.value,
                travelMode: google.maps.TravelMode.DRIVING,
            }, (response, status) => {
                if (status === 'OK') {
                    resolve(response);
                } else {
                    reject(status);
                }
            });
        });

        // Kiểm tra nếu results không tồn tại hoặc không có legs[0].distance.text
        if (!results || !results.routes || !results.routes[0] || !results.routes[0].legs || !results.routes[0].legs[0] || !results.routes[0].legs[0].distance || !results.routes[0].legs[0].distance.text) {
            console.error('Không tìm thấy kết quả hoặc dữ liệu đường đi không hợp lệ.');
            return;
        }

        let lastDistance = 0;
        const setDistance = results.routes[0].legs[0].distance.text.split(/\s/)?.[0];
        if (setDistance.includes(",")) {
            lastDistance = Math.ceil(Number(setDistance.replace(",", ".")));
        } else if (setDistance.includes(".")) {
            lastDistance = Math.ceil(Number(setDistance.replace(".", "")));
        } else {
            lastDistance = Math.ceil(Number(setDistance));
        }
        let shipCost = Math.ceil(1 * lastDistance);
        const ship = document.getElementById('shipp');
        const total = document.getElementById('total');
        if (ship && total) {
            ship.textContent = `${shipCost} $`;
            total.textContent = `${parseFloat(total.dataset.total) + shipCost} $`;
        }
    } catch (error) {
        console.error('Đã xảy ra lỗi khi tính toán đường đi:', error);
        // Xử lý lỗi ở đây (ví dụ: hiển thị thông báo cho người dùng)
    }
};

document.addEventListener("DOMContentLoaded", function () {

    let place = null;

    function initialize() {
        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.addListener('place_changed', function () {
            place = autocomplete.getPlace();
            if (place) {
                calculateRoute();
            }
            if (input.dataset.old != "null") {
                input.dataset.old = "null";
            }
        });
    }

    input.addEventListener('blur', function () {
        if (place == null && this.dataset.old == "null" && document.getElementById('shipp')) {
            input.value = "";
            document.getElementById('shipp').textContent = "0$"
        }
    });

    input.addEventListener('input', function () {
        if (place != input.value) {
            place = null;
        }
        input.dataset.old = "null";
    });

    initialize();

});

