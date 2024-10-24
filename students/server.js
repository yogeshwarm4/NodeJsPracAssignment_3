const express = require('express');
const app = express();

app.use(express.json());

app.get('/api/data', (req, res) => {
    res.json({ message: 'Hello from Dhruvin Jariwala!' });
});

const port = 5000;
app.listen(port, () => {
    console.log(`Server is running on port ${port}`);
});