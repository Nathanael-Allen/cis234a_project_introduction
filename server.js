import express from "express";
import {dirname, join} from "path";
import path from "path";
import { fileURLToPath } from "url";

const __filename = fileURLToPath(import.meta.url);
const __dirname = dirname(__filename);
const app = express();

app.use(express.static(join(__dirname, "public", "static")));
app.use(express.static(join(__dirname, "public", "assets")));
app.use(express.static(join(__dirname, "public", "styles")));

app.get('/', (req, res) => {
  res.sendFile(join(__dirname, "index.html"))
})

app.listen(3000, () => {
  console.log("Server started\nhttp://localhost:3000");
})