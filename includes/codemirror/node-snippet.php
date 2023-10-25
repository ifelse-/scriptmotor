
// npm install express body-parser
// Import required modules
const express = require('express');
const bodyParser = require('body-parser');

// Create an Express application
const app = express();

// Middleware to parse JSON in request body
app.use(bodyParser.json());

// Sample data
const comments = [];

// Route to get all comments
app.get('/api/comments', (req, res) => {
  res.json(comments);
});

// Route to add a new comment
app.post('/api/comments', (req, res) => {
  const newComment = req.body;
  comments.push(newComment);
  res.status(201).json(newComment);
});

// Start the Express server
const port = process.env.PORT || 3000;
app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});