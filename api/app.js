const express = require('express')
const cors = require('cors')
const photos = require('./data/mockData.js')

const app = express()

app.use(cors())

app.get('/', (req, res) => {
	res.json({
		msg: photos,
	})
})

app.listen(4000, () => {
	console.log('listening for requests on port 4000')
})
