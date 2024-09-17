<style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 25px 0;
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
    </style>

    <form method="post">
        <input type="text"      placeholder="Name"  name="petname"      required>
        <input type="text"      placeholder="email" name="petemail"     required>
        <input type="number"    placeholder="Age"   name="petage"       required>
        <button type="submit" name="create">Create</button>
    </form>
    
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>

            <?php foreach($petdatabase->SelectAll() as $row){ ?>
                <tr>
                    <td><?php echo $row['petID']?></td>
                    <td><?php echo $row['petname']?></td>
                    <td><?php echo $row['petage']?></td>
                    <td><?php echo $row['petemail']?></td>
                    <td>
                        <button onclick="location.href ='?edit=<?php echo $row['petID'] ?>'">Edit</button>
                        <button onclick="location.href ='?delete=<?php echo $row['petID'] ?>'">Delete</button>
                    </td>
                </tr>
            <?php } ?>
        </table>
        
    </div>

