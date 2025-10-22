<?php 

function sqlAllCustomers() {
    return("SELECT * FROM `customers` ORDER BY last_name, first_name;");
}

function sqlAvailableBikes() {
    return("SELECT bike_id, model, type, hourly_rate FROM `bikes` WHERE available = 1;");
}

function sqlAllBikesByPrice() {
    return("SELECT * FROM `bikes` ORDER BY hourly_rate DESC");
}

function sqlOpenRentals() {
    return("SELECT * FROM `rentals` WHERE end_time = NULL;");
}

function sqlJoinRentalsCustomers() {
    return("SELECT * FROM `rentals` JOIN `customers` ON rentals.customer_id = customers.customer_id; ");
}

function sqlJoinRentalsBikes() {
    return("SELECT * FROM `rentals` JOIN `bikes` ON rentals.bike_id = bikes.bike_id");
}



// function sqlMorningRentals() {
//     return("SELECT * FROM `rentals` WHERE start_time < '12:00:00' ORDER BY start_time;");
// }

function sqlTop3Bikes() {
    return("SELECT * FROM `bikes` ORDER BY hourly_rate DESC LIMIT 3; ");
}



function sqlMultiJoinRentals() {
    return("SELECT * FROM `rentals` JOIN customers ON customers.customer_id = rentals.customer_id JOIN bikes ON bikes.bike_id = rentals.bike_id;");
}

function sqlUpdateCloseRental() {
    return("UPDATE `rentals` SET `end_time` = NOW() WHERE `rentals`.`rental_id` = 8 ");
}

function sqlUpdateBikeUnavailable() {
    return("UPDATE `bikes` SET `available` = 0 WHERE bike_id = 9");
}

?>