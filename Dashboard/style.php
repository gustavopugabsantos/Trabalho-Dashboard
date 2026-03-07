<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial;
}

body{
background:#0f172a;
color:white;
}

/* Layout principal */
.container{
display:grid;
grid-template-columns:250px 1fr;
height:100vh;
}

/* Sidebar */
.sidebar{
background:#020617;
padding:30px;
}

.sidebar h2{
margin-bottom:30px;
}

.menu{
list-style:none;
}

.menu li{
padding:15px;
margin-bottom:10px;
border-radius:8px;
cursor:pointer;
transition:0.3s;
}

.menu li:hover{
background:#1e293b;
}

/* Conteúdo */
.main{
padding:30px;
}

/* Topbar */
.topbar{
display:flex;
justify-content:space-between;
margin-bottom:30px;
}

.search{
padding:10px;
border-radius:8px;
border:none;
width:200px;
}

/* Cards */
.cards{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
gap:20px;
}

.card{
background:#1e293b;
padding:25px;
border-radius:15px;
transition:0.3s;
}

.card:hover{
transform:translateY(-5px);
background:#334155;
}

.card h3{
font-size:18px;
margin-bottom:10px;
}

.card p{
font-size:28px;
font-weight:bold;
}

</style>