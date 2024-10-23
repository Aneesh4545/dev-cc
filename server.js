const express = require('express');
const bodyParser = require('body-parser');
const AWS = require('aws-sdk');
const cors = require('cors');
const path = require('path');

const app = express();
const port = process.env.PORT || 3000;

// Configure AWS SDK
AWS.config.update({
    region: 'us-east-1', // e.g., 'us-west-2'
    accessKeyId: 'AKIA2AUOPEMHC53SJFVG',
    secretAccessKey: 'hdy5lZydFK3PQnGxJurxUpGrpbVT0BO1k3Uv/BT/'
});

const dynamoDB = new AWS.DynamoDB.DocumentClient();

app.use(cors());
app.use(bodyParser.urlencoded({ extended: true }));

// Serve static files from the public directory
app.use(express.static(path.join(__dirname, 'public')));

// Route to serve index.html
app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname, 'public', 'index.html'));
});

// Route to save contact form data
app.post('/contact', (req, res) => {
    const { Name, Email, Message } = req.body;

    const params = {
        TableName: 'Contact',
        Item: {
            id: Date.now().toString(),
            name: Name,
            email: Email,
            message: Message
        }
    };

    dynamoDB.put(params, (err) => {
        if (err) {
            console.error('Error saving data to DynamoDB:', err);
            return res.status(500).send('Error saving data');
        }
        res.status(200).send('Data saved successfully');
    });
});

app.listen(port, () => {
    console.log(`Server running on ${port}`);
});
