<style>
    /* Modal styles */
    .modal {
    display: none; 
    position: fixed; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    background-color: rgba(0,0,0,0.4); 
    z-index: 1000; /* Ensure modal is on top */
    
}

.modal-content {
    background-color: #fefefe;
    padding: 20px;
    border: 1px solid #888;
    width: 50%; 
    max-width: 600px; /* Optional: Set a maximum width */
    border-radius: 8px; /* Optional: Rounded corners */
    z-index: 1001; /* Ensure modal content is above the modal overlay */
    margin: 0; /* Remove default margin */
    margin-left: 30%;
    margin-top: 5%;
}

#openModalBtn{
    background-color: blue;
    color: white;
    padding: 10px 20px; /* Increased padding for larger buttons */
    border: none;
    border-radius: 2px;
    cursor: pointer;
    font-size: 18px; /* Increased font size */
}
#openModalBtn:hover{
    background-color: darkblue;
}

.close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

.close:hover,
.close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        table {
            width: 90%;
            border-collapse: collapse;
            margin: 25px 40;
            font-family: Arial, sans-serif;
            text-align: left;
        }

        th, td {
            padding: 12px;
            border: 1px solid #dddddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

    #addclient {
        background-color: blue;
        color: white;
        border: none;
        padding: 15px 25px;
        cursor: pointer;
    }

    #addclient:hover {
        background-color: darkblue;
    }

    #edit{
        background-color: green;
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
    }
    #edit:hover{
        background-color: darkgreen;
    }
    #delete{
        background-color: crimson;
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
    }
    #delete:hover{
        background-color: darkred;
    }
    #viewpet{
        background-color: darkcyan;
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
    }
    #viewpet:hover{
        background-color: darkgrey;
    }

    
.form-container {
            max-width: 700px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
.form-container h2 {
            text-align: center;
        }
.form-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
.form-container input, .form-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
.form-buttons #create {
            background-color: darkcyan;
            color: white;
            padding: 15px 50px; /* Increased padding for larger buttons */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px; /* Increased font size */
}

.form-buttons #create:hover {
    background-color: darkolivegreen;
}

.form-buttons #cancel {
    background-color: crimson;
    color: white;
    padding: 15px 50px; /* Increased padding for larger buttons */
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 18px; /* Increased font size */
}

.form-buttons #cancel:hover {
    background-color: darkred;
}
.form-buttons {
            display: flex;
            justify-content: space-between;
        }



.page-info{
            width: 130px;
            font-size: 20px;
            font-style: italic;
            text-align: center;
        }

      
.pagination {
            display: flex;
            justify-content: left;
            align-items: center;
            margin: 20px 0;
            gap: 8px; /* Adjust the gap between elements */
        }

        .pagination a {
            color: #007bff;
            padding: 8px 12px;
            text-decoration: none;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .pagination a:hover {
            background-color: #007bff;
            color: white;
        }

        .pagination a.active {
            background-color: #007bff;
            color: white;
            pointer-events: none;
        }

        .pagination a.disabled {
            color: #999;
            pointer-events: none;
            border-color: #ddd;
        }

    </style>
    <br>  <br>  <br>
 
    <div>
        <!-- Trigger Button -->
<button id="openModalBtn">ADD CLIENT</button>

<!-- The Modal -->
<div id="myModal" class="modal">
        <div class="modal-content">
                <div class="form-container">
                    <h2>Add New Client</h2>
                    <form method="post">
                        <!-- First Name Field -->
                        <label for="firstname">First Name:</label>
                        <input type="text" id="firstname" name="firstname" placeholder="Enter first name" required>

                        <!-- Last Name Field -->
                        <label for="lastname">Last Name:</label>
                        <input type="text" id="lastname" name="lastname" placeholder="Enter last name" required>

                        <!-- Email Field -->
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Enter email" required>

                        <!-- Address Field -->
                        <label for="address">Address:</label>
                        <textarea id="address" name="address" placeholder="Enter address" rows="4" required></textarea>

                        <!-- Buttons -->
                        <div class="form-buttons">
                            <button id="create" type="submit" name="create">Submit</button>
                            <button onclick="location.href='ownercontroller.php'" id="cancel" type="submit" name="cancel">Cancel</button>
                        </div>
                    </form>
                </div>
        </div>
</div>
<div>
        <table class="table table-success table-striped-columns">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Address</th>
                <th>Created Date</th>
                <th>Actions</th>
            </tr>

            <?php foreach($ownerdb->ReadAll() as $row){ ?>
                <tr>
                    <td><?php echo $row['ownerID']?></td>
                    <td><?php echo $row['firstname']?></td>
                    <td><?php echo $row['lastname']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['address']?></td>
                    <td><?php echo $row['createdby']?></td>
                    <td>
                        <button onclick="" id="viewpet">View Pet</button>
                        <button onclick="location.href='?edit=<?php echo $row['ownerID']?>'" id="edit">Edit</button>
                        <button onclick="location.href='?delete=<?php echo $row['ownerID']?>'" id="delete">Delete</button>
                    </td>
                </tr>
            <?php } ?>
        </table>

        <div class="page-info">
            Showing 1 to <?php echo $ownerdb->CountAllRows(); ?>
        </div>

    <div class="pagination">
            <a href="?first=1">First</a>

            <a href="?first=<?php echo isset($_GET['first']) ? $_GET['first'] - 1 : 0; ?>">Prev</a>
            
            <div class="page-numbers">
                <a href="">1</a>
                <a href="">2</a>
                <a href="">3</a>
                <a href="">4</a>
                <a href="">5</a>
            </div>

            <a href="?first=<?php echo isset($_GET['first']) ? $_GET['first']+1 : '1'?>">Next</a>

            <a href="?first=<?php echo $ownerdb->CountAllRows(); ?>">Last</a>
        </div>
        
    </div>

    <script>
    // Get modal element
    var modal = document.getElementById("myModal");

    // Get open button
    var btn = document.getElementById("openModalBtn");

    // Get close button
    var span = document.getElementsByClassName("close")[0];

    // Open modal when button is clicked
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // Close modal when close button is clicked
    span.onclick = function() {
        modal.style.display = "none";
    }

    // Close modal if user clicks outside of it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

