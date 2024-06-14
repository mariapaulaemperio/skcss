document.getElementById('codeForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission

    // Check if the code is correct (You need to implement this part)
    var code = document.querySelector('input[name="code"]').value;
    // Example check:
    if (code === 'your_correct_code') {
        // Show the second form
        document.getElementById('secondForm').classList.remove('hidden');
    } else {
        // Optionally, you can redirect back with an error message
        window.location.href = 'forgot.php?error=Incorrect%20Code';
    }
});
// script.js

document.addEventListener('DOMContentLoaded', () => {
    // Example user data
    const users = [
        {
            email: 'user1@example.com',
            username: 'user1',
            type: 'youth',
            firstname: 'John',
            middlename: 'A',
            lastname: 'Doe',
            address: '123 Main St',
            gender: 'male',
            status: 'single',
            birthdate: '2000-01-01',
            age: 24
        },
        {
            email: 'user2@example.com',
            username: 'user2',
            type: 'barangayofficial',
            firstname: 'Jane',
            middlename: 'B',
            lastname: 'Smith',
            address: '456 Elm St',
            gender: 'female',
            status: 'married',
            birthdate: '1995-05-15',
            age: 29
        }
    ];

    const tableBody = document.querySelector('#registrationTable tbody');
    
    users.forEach(user => {
        const newRow = document.createElement('tr');
        newRow.innerHTML = `
            <td>${user.username}</td>
            <td>${user.email}</td>
            <td>
                <button onclick="acceptRegistration(event)">Accept</button>
                <button onclick="rejectRegistration(event)">Reject</button>
            </td>
        `;
        newRow.addEventListener('click', () => showModal(user));
        tableBody.appendChild(newRow);
    });
});

function calculateAge(birthdate) {
    const birthDate = new Date(birthdate);
    const diff = Date.now() - birthDate.getTime();
    const ageDate = new Date(diff);
    return Math.abs(ageDate.getUTCFullYear() - 1970);
}

function showModal(userInfo) {
    const modal = document.getElementById('infoModal');
    const userInfoContainer = document.getElementById('userInfo');
    userInfoContainer.innerHTML = `
        <strong>Username:</strong> ${userInfo.username}<br>
        <strong>Email:</strong> ${userInfo.email}<br>
        <strong>Type:</strong> ${userInfo.type}<br>
        <strong>Full Name:</strong> ${userInfo.firstname} ${userInfo.middlename} ${userInfo.lastname}<br>
        <strong>Address:</strong> ${userInfo.address}<br>
        <strong>Gender:</strong> ${userInfo.gender}<br>
        <strong>Status:</strong> ${userInfo.status}<br>
        <strong>Birthdate:</strong> ${userInfo.birthdate}<br>
        <strong>Age:</strong> ${userInfo.age}<br>
    `;
    modal.style.display = "block";
}

function closeModal() {
    const modal = document.getElementById('infoModal');
    modal.style.display = "none";
}

window.onclick = function(event) {
    const modal = document.getElementById('infoModal');
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function acceptRegistration(event) {
    event.stopPropagation();
    alert('Registration accepted');
}

function rejectRegistration(event) {
    event.stopPropagation();
    alert('Registration rejected');
}
