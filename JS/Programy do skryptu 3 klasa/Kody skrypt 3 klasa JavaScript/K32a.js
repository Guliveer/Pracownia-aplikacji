data_n = new Date();
data_l = data_n.toString();
data_u = data_n.toGMTString();
data_r = data_n.toLocaleString();

document.write("<b>Czas Lokalny: </b> " + data_l + "<br />");
document.write("<b>Czas Uniwersalny: </b> " + data_u + "<br />");
document.write("<b>Czas Regionalny: </b> " + data_r + "<br />");