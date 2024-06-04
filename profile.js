let officials = [];

        function renderTable(filteredOfficials) {
            const tableBody = document.querySelector('#officialsTable tbody');
            tableBody.innerHTML = '';
            filteredOfficials.forEach((official, index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${official.id}</td>
                    <td>${official.name}</td>
                    <td>${official.position}</td>
                    <td>${official.type}</td>
                    <td><img class="official-image" src="${official.image}" alt="${official.name}"></td>
                    <td>
                        <button class="btn btn-warning btn-sm" onclick="editOfficial(${index})">Edit</button>
                        <button class="btn btn-danger btn-sm" onclick="deleteOfficial(${index})">Delete</button>
                    </td>
                `;
                tableBody.appendChild(row);
            });
        }

        function addOfficial() {
            const id = document.getElementById('officialId').value;
            const name = document.getElementById('officialName').value;
            const position = document.getElementById('officialPosition').value;
            const type = document.getElementById('officialCategory').value;
            const imageInput = document.getElementById('officialImage');
            
            if (id && name && position && type && imageInput.files.length > 0) {
                const imageFile = imageInput.files[0];
                const reader = new FileReader();
                reader.readAsDataURL(imageFile);
                reader.onload = function () {
                    const imageSrc = reader.result;
                    officials.push({ id, name, position, type, image: imageSrc });
                    filterOfficials();
                    closeModal('addOfficialModal');
                    clearForm();
                };
            } else {
                alert('Please fill in all fields and select an image.');
            }
        }

        function editOfficial(index) {
            const official = officials[index];
            document.getElementById('officialId').value = official.id;
            document.getElementById('officialName').value = official.name;
            document.getElementById('officialPosition').value = official.position;
            document.getElementById('officialCategory').value = official.type;
            openModal('addOfficialModal');
            const modalButton = document.querySelector('.modal-content button');
            modalButton.textContent = 'Update Official';
            modalButton.onclick = function() {
                updateOfficial(index);
            };
        }

        function updateOfficial(index) {
            const id = document.getElementById('officialId').value;
            const name = document.getElementById('officialName').value;
            const position = document.getElementById('officialPosition').value;
            const type = document.getElementById('officialCategory').value;
            if (id && name && position && type) {
                officials[index] = { id, name, position, type };
                filterOfficials();
                closeModal('addOfficialModal');
                clearForm();
                const modalButton = document.querySelector('.modal-content button');
                modalButton.textContent = 'Add Official';
                modalButton.onclick = addOfficial;
            } else {
                alert('Please fill in all fields.');
            }
        }

        function deleteOfficial(index) {
            officials.splice(index, 1);
            filterOfficials();
        }

        function filterOfficials() {
            renderTable(officials);
        }

        function openModal(modalId) {
            document.getElementById(modalId).style.display = 'flex';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }

        function clearForm() {
            document.getElementById('officialId').value = '';
            document.getElementById('officialName').value = '';
            document.getElementById('officialPosition').value = '';
            document.getElementById('officialCategory').value = 'sk';
            document.getElementById('officialImage').value = '';
        }

        window.onclick = function(event) {
            const modal = document.getElementById('addOfficialModal');
            if (event.target === modal) {
                closeModal('addOfficialModal');
            }
        }

        filterOfficials();