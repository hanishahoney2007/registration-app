import './bootstrap';
console.log('JavaScript is working!');
document.addEventListener('DOMContentLoaded', function () {
    
    const categoryRadio = document.querySelectorAll(
        'input[name="category"]'
    );
    const companyField = document.getElementById('company_field');
    const companyInput = document.getElementById('company_name');
    //const isCorporate = categorySelect.value === 'corporate';
    function toggleCompanyField() {
        const categoryRadio = document.querySelector(
            'input[name="category"]:checked'
        );
        if (categoryRadio && categoryRadio.value === 'corporate') {
            companyField.classList.remove('hidden');
        } else {
            companyField.classList.add('hidden');
        }
        // Clear the value when hidden
        // if (!isCorporate) {
        //     companyInput.value = '';
        // }
        console.log(categoryRadio.value);
    }
    toggleCompanyField();
     categoryRadio.forEach(function (radio) {
        radio.addEventListener('change', function () {
            console.log('CHANGE EVENT FIRED');
            toggleCompanyField();
        });
        });
     const successMessage = document.getElementById('successMessage');

    if (successMessage) {
        setTimeout(function () {
            successMessage.remove();
        }, 6000); // 6 seconds
    }


    /*********************************************** */
     const menuButton = document.getElementById('menuButton');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');

    if (menuButton && sidebar && overlay) {

        menuButton.addEventListener('click', function () {

            sidebar.classList.remove('-translate-x-full');

            overlay.classList.remove('hidden');

        });


        overlay.addEventListener('click', function () {

            sidebar.classList.add('-translate-x-full');

            overlay.classList.add('hidden');

        });

    }


    /*
    |--------------------------------------------------------------------------
    | Search Orders
    |--------------------------------------------------------------------------
    */

    const searchInput =
        document.getElementById('searchOrders');

    if (searchInput) {

        searchInput.addEventListener('input', function () {

            const search =
                this.value.toLowerCase();

            document
                .querySelectorAll('.order-row')
                .forEach(function (row) {

                    const text =
                        row.textContent.toLowerCase();

                    row.style.display =
                        text.includes(search)
                            ? ''
                            : 'none';

                });

        });

    }


});



function initMap(){
    
    console.log('initMap called');

    const mapElement = document.getElementById('map');
    console.log('Map element:', mapElement);

    if (!mapElement) {
        console.error('Map element not found');
        return;
    }

    const latitudeInput = document.getElementById('latitude');
    const longitudeInput = document.getElementById('longitude');
    const addressInput = document.getElementById('location_address');

    const defaultLocation = {
        lat: 10.8505,
        lng: 76.2711
    };

    const map = new google.maps.Map(mapElement, {
        center: defaultLocation,
        zoom: 8
    });

    const marker = new google.maps.Marker({
        position: defaultLocation,
        map: map,
        draggable: true
    });

    // Address search
    if (addressInput) {
        const autocomplete = new google.maps.places.Autocomplete(
            addressInput
        );

        autocomplete.addListener('place_changed', function () {
            const place = autocomplete.getPlace();

            if (!place.geometry || !place.geometry.location) {
                return;
            }

            const location = place.geometry.location;

            map.setCenter(location);
            map.setZoom(15);

            marker.setPosition(location);

            latitudeInput.value = location.lat();
            longitudeInput.value = location.lng();
        });
    }

    // Marker drag
    marker.addListener('dragend', function () {
        const position = marker.getPosition();

        latitudeInput.value = position.lat();
        longitudeInput.value = position.lng();

        console.log('Latitude:', position.lat());
        console.log('Longitude:', position.lng());
    });

    // Map click
    map.addListener('click', function (event) {
        marker.setPosition(event.latLng);

        latitudeInput.value = event.latLng.lat();
        longitudeInput.value = event.latLng.lng();

        console.log('Latitude:', event.latLng.lat());
        console.log('Longitude:', event.latLng.lng());
    });

}

window.initMap = initMap;