<meta charset="utf-8">

<aside class="sidebar">
    <nav class="menu mt-1.5">
        <ul class="nav-list">
            <li class="nav-item">
                <a href="dashboard.php">
                    <i class="icofont-home mr-2"></i>
                    Dashboard
                </a>
            </li>
                <li class="nav-item">
                <a href="day_records.php">
                    <i class="icofont-ui-calendar mr-2"></i>
                    Agenda 
                </a>
            </li>

            <li class="nav-item2"><a href="#"><i class="icofont-paper mr-2"></i>Relatório <i class="icofont-thin-down"></i></a></li>
            <div class="dropdown-container">
                <li class="nav-item">
                    <a href="monthly_report.php"><i class="icofont-calendar mr-2"></i>Relatório Mensal</a><br>
                    </li>
                    <?php if($user->is_admin): ?>
                    <li class="nav-item">
                    <a href="manager_report.php"><i class="icofont-chart-histogram mr-2"></i>Relatório Gerencial</a><br>
                    </li>
                    <?php endif ?>
                </li>      
            </div>
            </li>
            
            <?php if($user->is_admin): ?>
            
            <li class="nav-item2"><a href="#"><i class="icofont-address-book mr-2"></i>Cadastros <i class="icofont-thin-down"></i></a></li>
            <div class="dropdown-container">
                <li class="nav-item">
                    <a href="#"><i class="icofont-users-alt-2 mr-2"></i>Cadastro de Clientes</a><br>
                    </li>
                    <li class="nav-item">
                    <a href="users.php"><i class="icofont-users mr-2"></i>Cadastro de Usuários</a><br>
                    </li>
                </li>      
            </div>
            </li>
            
            <?php endif ?>
        </ul>
    </nav>
    <div class="sidebar-widgets">
        <ul class="nav-list">
            <li class="nav-item">
                <a href="day_records.php">
                    Registrar Ponto
                </a>
            </li>
            </ul>

        <div class="sidebar-widget">
            <i class="icon icofont-hour-glass text-primary"></i>
            <div class="info">
                <span class="main text-primary"
                    <?= $activeClock === 'workedInterval' ? 'active-clock' : '' ?>>
                    <?= $workedInterval ?>
                </span>
                <span class="label text-muted">Horas Trabalhadas</span>
            </div>
        </div>
        <div class="division my-3"></div>
        <div class="sidebar-widget">
            <i class="icon icofont-ui-alarm text-danger"></i>
            <div class="info">
                <span class="main text-danger"
                    <?= $activeClock === 'exitTime' ? 'active-clock' : '' ?>>
                    <?= $exitTime ?>
                </span>
                <span class="label text-muted">Hora de Saída</span>
            </div>
        </div>
    </div>
            </ul>
            </nav>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("nav-item2");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

    
</aside>

