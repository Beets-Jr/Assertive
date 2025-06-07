const express   = require('express');
const path    = require('path');
const nodemailer = require('nodemailer');
const app = express();
app.use(express.urlencoded({ extended: false }));
app.use(express.json());

app.use('/CSS',   express.static(path.join(__dirname, 'CSS')));
app.use('/HTML',  express.static(path.join(__dirname, 'HTML')));
app.use('/JS',    express.static(path.join(__dirname, 'JS')));
app.use('/imgs',  express.static(path.join(__dirname, 'imgs')));

const transporter = nodemailer.createTransport({
  host: 'smtp.gmail.com',
  port: 465,
  secure: true,
  auth: {
    user: 'matulianesrenan@gmail.com',
    pass: 'brnn sznk stxf wiyg'
  }
});

app.post('/enviar', async (req, res) => {
  const { nome, email, celphone, mensagem } = req.body;
  try {
    await transporter.sendMail({
      from: `"${nome}" <${email}>`,
      to: 'matulianesrenan@gmail.com',
      subject: `Contato via site: ${nome}`,
      html: `
        Um cliente entrou em contato com as seguintes informações: <br>
        <p><strong>Nome:</strong> ${nome}</p>
        <p><strong>E-mail:</strong> ${email}</p>
        <p><strong>Celular:</strong> ${celphone}</p>
        <hr>
        <p>${mensagem}</p>
      `
    });

    await transporter.sendMail({
      from: `"Assertive Brasil" <matulianesrenan@gmail.com>`,
      to: email,
      subject: 'Obrigado pelo seu contato!',
      html: `
        <p>Olá ${nome},</p>
        <p>Obrigado por entrar em contato conosco! Recebemos sua mensagem e em breve um de nossos especialistas irá respondê-lo.</p>
        <p>Enquanto isso, sinta-se à vontade para navegar em nosso site ou conhecer nossos serviços:</p>
        <ul>
          <li><a href="https://assertivebrasil.com.br/servicos">Serviços</a></li>
          <li><a href="https://assertivebrasil.com.br/sobre-nos">Quem Somos</a></li>
          <li><a href="https://assertivebrasil.com.br/contato">Contato</a></li>
        </ul>
        <p>Atenciosamente,<br>Equipe Assertive Brasil</p>
      `
    });

    res.json({ status: 'success' });
  } catch (err) {
    console.error(err);
    res.status(500).json({ status: 'error' });
  }
});

app.listen(3000, ()=> console.log('Server on port 3000'));
