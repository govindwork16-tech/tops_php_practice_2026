<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Workout Tracker</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background: #0f172a;
      color: #fff;
      margin: 0;
      padding: 20px;
    }

    .container {
      max-width: 1200px;
      margin: auto;
    }

    /* Header */
    h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    /* Cards */
    .cards {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 15px;
      margin-bottom: 20px;
    }

    .card {
      background: #1e293b;
      padding: 20px;
      border-radius: 10px;
      text-align: center;
    }

    .card h2 {
      margin: 0;
      font-size: 28px;
    }

    .card p {
      color: #94a3b8;
    }

    /* Form */
    .form-box {
      background: #1e293b;
      padding: 20px;
      border-radius: 10px;
      margin-bottom: 20px;
    }

    .form-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 15px;
    }

    input,
    select {
      padding: 10px;
      border-radius: 6px;
      border: none;
      outline: none;
    }

    button {
      background: #22c55e;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }

    button:hover {
      background: #16a34a;
    }

    /* Filter */
    .filter {
      display: flex;
      justify-content: space-between;
      margin-bottom: 15px;
    }

    .filter input {
      width: 200px;
    }

    /* Table */
    table {
      width: 100%;
      border-collapse: collapse;
      background: #1e293b;
      border-radius: 10px;
      overflow: hidden;
    }

    th,
    td {
      padding: 12px;
      text-align: center;
    }

    th {
      background: #334155;
    }

    tr:nth-child(even) {
      background: #0f172a;
    }

    /* Buttons */
    .action-btn {
      padding: 5px 10px;
      border-radius: 5px;
      border: none;
      cursor: pointer;
    }

    .edit {
      background: #facc15;
    }

    .delete {
      background: #ef4444;
      color: white;
    }

    /* Responsive */
    @media(max-width: 768px) {
      .cards {
        grid-template-columns: 1fr;
      }

      .form-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>

<body>

  <div class="container">

    <h1>🏋️ Workout Tracker</h1>

    <!-- Cards -->
    <div class="cards">
      <div class="card">
        <h2>12</h2>
        <p>Total Workouts</p>
      </div>
      <div class="card">
        <h2>18,500</h2>
        <p>Total Volume</p>
      </div>
      <div class="card">
        <h2>150kg</h2>
        <p>Deadlift PR</p>
      </div>
    </div>

    <!-- Form -->
    <div class="form-box">
      <h3>Add Workout</h3>
      <div class="form-grid">
        <input type="text" placeholder="Exercise Name">
        <select>
          <option>Category</option>
          <option>Chest</option>
          <option>Back</option>
          <option>Legs</option>
        </select>
        <input type="number" placeholder="Weight (kg)">
        <input type="number" placeholder="Reps">
        <input type="number" placeholder="Sets">
        <input type="date">
        <button>Add</button>
      </div>
    </div>

    <!-- Filter -->
    <div class="filter">
      <input type="text" placeholder="Search Exercise...">
      <input type="date">
    </div>

    <!-- Table -->
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Exercise</th>
          <th>Category</th>
          <th>Weight</th>
          <th>Reps</th>
          <th>Sets</th>
          <th>Date</th>
          <th>Actions</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>1</td>
          <td>Deadlift</td>
          <td>Back</td>
          <td>150kg</td>
          <td>5</td>
          <td>3</td>
          <td>2026-04-10</td>
          <td>
            <button class="action-btn edit">Edit</button>
            <button class="action-btn delete">Delete</button>
          </td>
        </tr>

        <tr>
          <td>2</td>
          <td>Bench Press</td>
          <td>Chest</td>
          <td>90kg</td>
          <td>8</td>
          <td>3</td>
          <td>2026-04-09</td>
          <td>
            <button class="action-btn edit">Edit</button>
            <button class="action-btn delete">Delete</button>
          </td>
        </tr>

      </tbody>
    </table>

  </div>

</body>

</html>