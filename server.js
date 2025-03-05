const express = require('express');
const nodemailer = require('nodemailer');
const cors = require('cors');
const app = express();

app.use(express.json());
app.use(cors());

const transporter = nodemailer.createTransport({
  service: 'outlook',
  auth: {
    user: 'fabricio.damasceno@outlook.com.br',
    pass: 'sua_senha_aqui'
  }
});

app.post('/send-email', async (req, res) => {
  const { name, email, contact, subject, message } = req.body;
  
  const mailOptions = {
    from: email,
    to: 'fabricio.damasceno@outlook.com.br',
    subject: subject,
    text: `Nome: ${name}\nE-mail: ${email}\nContato: ${contact}\nMensagem: ${message}`
  };

  try {
    await transporter.sendMail(mailOptions);
    res.json({ message: 'Email enviado com sucesso!' });
  } catch (error) {
    res.status(500).json({ error: 'Erro ao enviar email' });
  }
});

app.listen(3000, () => {
  console.log('Servidor rodando na porta 3000');
});
