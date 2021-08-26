const path = require('path')
const express = require('express')

const app = express()
const port = process.env.PORT || 8080

const basePath = path.join(__dirname, '../public')

app.use(express.static(basePath))

app.listen(port, ()=> {
    console.log('Server started on port ' + port)
})