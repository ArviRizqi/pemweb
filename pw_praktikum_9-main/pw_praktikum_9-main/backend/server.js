
const express = require("express")
const app = express()
const port = 3000

const companyProfile = {
 name: "PT GIT Solution",
 description: "Solusi Teknologi Terbaik untuk Bisnis Anda",
 services: ["Pengembangan Software", "Konsultasi IT", "ManajemenProyek"]
};
app.use(express.json())
app.get("/", (req, res) => {
  res.send("Welcome to Company Profile API")
})
app.get("/profile", (req, res) => {
  res.json(companyProfile)
})
app.listen(port, () => {
  console.log(`Server is running on http://localhost:${port}`)
})
