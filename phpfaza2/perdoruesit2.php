<?php include '../components/menu-anash.php';  ?>
<div class="user-table">
  <div class="table-header">
    <h2>Registered Users</h2>
    <button>Button</button>
  </div>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Country</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>John Doe</td>
        <td>john.doe@example.com</td>
        <td>30</td>
        <td>Male</td>
        <td>United States</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Jane Smith</td>
        <td>jane.smith@example.com</td>
        <td>25</td>
        <td>Female</td>
        <td>Canada</td>
      </tr>
      <!-- more rows... -->
    </tbody>
  </table>
</div>


<style>


    .user-table {
  display: flex;
  justify-content: space-between;
  align-items: center;
  border: 1px solid black;
  padding: 10px;
}

.user-table h2 {
  margin: 0;
}

.user-table table {
  border-collapse: collapse;
  width: 100%;
}

.user-table th,
.user-table td {
  border: 1px solid black;
  padding: 8px;
  text-align: left;
}

.user-table th {
  background-color: #ccc;
}

.user-table button {
  padding: 10px;
}
.table-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 10px;
}
</style>