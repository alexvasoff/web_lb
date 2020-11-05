m_style = "background-color:#00ffff; color:#ff00ff;"
m_style += "font-size:24pt; font-family:'Times New Roman'"
name = 'Сеть магазинов "ВСЁ ДЛЯ ДОМА"'
let date = new Date()
today = date.getDate() + "." + (date.getMonth() + 1) + "." + date.getFullYear()
document.write('<p align=center style= "' + m_style +'">' +
    name + '</p><p>Сегодня ' + today + '</p>')
