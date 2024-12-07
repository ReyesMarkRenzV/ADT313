const express = require('express');
const mysql = require('mysql');
const cors = require('cors');
const bodyParser = require('body-parser');

const app = express();
app.use(cors());
app.use(bodyParser.json());

const db = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'your_database_name'
});

db.connect((err) => {
  if (err) throw err;
  console.log('MySQL Connected...');
});

app.post('/register', (req, res) => {
  const { email, password, firstName, middleName, lastName, contactNumber } = req.body;
  let sql = 'INSERT INTO users (email, password, first_name, middle_name, last_name, contact_number) VALUES (?, ?, ?, ?, ?, ?)';
  let query = db.query(sql, [email, password, firstName, middleName, lastName, contactNumber], (err, result) => {
    if (err) {
      res.status(500).json({ message: 'Registration failed' });
    } else {
      res.status(200).json({ message: 'User registered successfully' });
    }
  });
});

app.listen(3000, () => {
  console.log('Server started on port 3000');
});