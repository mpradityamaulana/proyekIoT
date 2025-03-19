function controlMotor(direction) {
    fetch(`/api/motor-control?dir=${direction}`)
        .then(response => response.json())
        .then(data => alert("Motor: " + data.status))
        .catch(error => console.error('Error:', error));
}

function fetchIMUData() {
    fetch('/api/imu-data')
        .then(response => response.json())
        .then(data => {
            document.getElementById('imuData').innerHTML = `
                <p>Accelerometer: X=${data.accel_x}, Y=${data.accel_y}, Z=${data.accel_z}</p>
                <p>Gyroscope: X=${data.gyro_x}, Y=${data.gyro_y}, Z=${data.gyro_z}</p>
            `;
        })
        .catch(error => console.error('Error:', error));
}

setInterval(fetchIMUData, 1000);
