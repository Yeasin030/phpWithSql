
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Overview | Student Records</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=DM+Serif+Display&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="dashboard.css">
</head>
<body>
	<div class="app-shell">
		<aside class="sidebar" id="sidebar">
			<a class="brand" href="dashbord.php" aria-label="Student Records overview">
				<span class="brand-icon"><i class="bi bi-mortarboard-fill" aria-hidden="true"></i></span>
				<span class="brand-copy"><strong>Campus</strong><small>STUDENT RECORDS</small></span>
			</a>

			<p class="nav-label">WORKSPACE</p>
			<nav class="primary-nav" aria-label="Main navigation">
				<a class="nav-link active" href="dashbord.php" aria-current="page"><i class="bi bi-grid-1x2-fill" aria-hidden="true"></i><span>Overview</span></a>
				<a class="nav-link" href="../crud/index.php"><i class="bi bi-people" aria-hidden="true"></i><span>Students</span><i class="bi bi-arrow-up-right nav-arrow" aria-hidden="true"></i></a>
				<a class="nav-link" href="../crud/newEntry.php"><i class="bi bi-person-plus" aria-hidden="true"></i><span>Add student</span></a>
			</nav>

			<div class="sidebar-bottom">
				<div class="sidebar-note">
					<span class="note-icon"><i class="bi bi-lightbulb" aria-hidden="true"></i></span>
					<p>Keep student contact details up to date for a complete directory.</p>
					<a href="../crud/index.php">Open directory <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
				</div>
				<a class="sign-out" href="index.php"><i class="bi bi-box-arrow-left" aria-hidden="true"></i><span>Sign out</span></a>
			</div>
		</aside>

		<main class="main-content">
			<header class="topbar">
				<button class="menu-toggle" id="menuToggle" type="button" aria-label="Open navigation" aria-controls="sidebar" aria-expanded="false">
					<i class="bi bi-list" aria-hidden="true"></i>
				</button>
				<div class="breadcrumb"><span>Workspace</span><i class="bi bi-chevron-right" aria-hidden="true"></i><strong>Overview</strong></div>
				<div class="topbar-date"><span class="date-dot"></span><span id="todayDate">Student directory preview</span></div>
			</header>

			<div class="content-wrap">
				<section class="page-heading">
					<div>
						<p class="eyebrow">YOUR CAMPUS, AT A GLANCE · DEMO DATA</p>
						<h1>Overview<span>.</span></h1>
						<p class="page-subtitle">A clear view of your student directory and contact details.</p>
					</div>
					<a class="button button-primary" href="../crud/newEntry.php"><i class="bi bi-plus-lg" aria-hidden="true"></i> Add student</a>
				</section>

				<section class="stats-grid" aria-label="Student directory summary">
					<article class="stat-card stat-green">
						<div class="stat-top"><span>Total students</span><span class="stat-icon"><i class="bi bi-people-fill" aria-hidden="true"></i></span></div>
						<p class="stat-number">128</p>
						<p class="stat-caption">Profiles in your directory</p>
					</article>
					<article class="stat-card stat-blue">
						<div class="stat-top"><span>Email contacts</span><span class="stat-icon"><i class="bi bi-envelope-fill" aria-hidden="true"></i></span></div>
						<p class="stat-number">116</p>
						<p class="stat-caption">Students with an email address</p>
					</article>
					<article class="stat-card stat-orange">
						<div class="stat-top"><span>Phone contacts</span><span class="stat-icon"><i class="bi bi-telephone-fill" aria-hidden="true"></i></span></div>
						<p class="stat-number">103</p>
						<p class="stat-caption">Students with a phone number</p>
					</article>
					<article class="stat-card stat-lilac">
						<div class="stat-top"><span>Complete profiles</span><span class="stat-icon"><i class="bi bi-check2-circle" aria-hidden="true"></i></span></div>
						<p class="stat-number">82<span class="percent">%</span></p>
						<p class="stat-caption">105 with email and phone</p>
					</article>
				</section>

				<section class="directory-section" aria-labelledby="directory-title">
					<div class="section-heading">
						<div>
							<p class="eyebrow">THE DIRECTORY</p>
							<h2 id="directory-title">Recently added</h2>
						</div>
						<div class="directory-actions">
							<label class="search-box">
								<i class="bi bi-search" aria-hidden="true"></i>
								<span class="visually-hidden">Search recent students</span>
								<input id="studentSearch" type="search" placeholder="Search students" autocomplete="off">
							</label>
							<a class="text-link" href="../crud/index.php">View all <i class="bi bi-arrow-up-right" aria-hidden="true"></i></a>
						</div>
					</div>

					<div class="table-wrap">
						<table>
							<thead>
								<tr><th scope="col">Student</th><th scope="col">Email address</th><th scope="col">Phone number</th><th scope="col" class="table-end">Profile</th></tr>
							</thead>
							<tbody id="studentRows">
								<tr class="student-row" data-search="olivia bennett olivia.bennett@example.com 202 555 0142">
									<td><div class="student-cell"><span class="avatar">O</span><span class="student-name">Olivia Bennett</span></div></td>
									<td>olivia.bennett@example.com</td>
									<td>+1 (202) 555-0142</td>
									<td class="table-end"><span class="status status-complete"><span></span>Complete</span></td>
								</tr>
								<tr class="student-row" data-search="noah parker noah.parker@example.com 202 555 0175">
									<td><div class="student-cell"><span class="avatar">N</span><span class="student-name">Noah Parker</span></div></td>
									<td>noah.parker@example.com</td>
									<td>+1 (202) 555-0175</td>
									<td class="table-end"><span class="status status-complete"><span></span>Complete</span></td>
								</tr>
								<tr class="student-row" data-search="maya roberts maya.roberts@example.com 202 555 0138">
									<td><div class="student-cell"><span class="avatar">M</span><span class="student-name">Maya Roberts</span></div></td>
									<td>maya.roberts@example.com</td>
									<td>+1 (202) 555-0138</td>
									<td class="table-end"><span class="status status-pending"><span></span>Needs details</span></td>
								</tr>
								<tr class="student-row" data-search="ethan cole ethan.cole@example.com 202 555 0184">
									<td><div class="student-cell"><span class="avatar">E</span><span class="student-name">Ethan Cole</span></div></td>
									<td>ethan.cole@example.com</td>
									<td>+1 (202) 555-0184</td>
									<td class="table-end"><span class="status status-complete"><span></span>Complete</span></td>
								</tr>
								<tr class="student-row" data-search="ava thompson ava.thompson@example.com 202 555 0196">
									<td><div class="student-cell"><span class="avatar">A</span><span class="student-name">Ava Thompson</span></div></td>
									<td>ava.thompson@example.com</td>
									<td>+1 (202) 555-0196</td>
									<td class="table-end"><span class="status status-complete"><span></span>Complete</span></td>
								</tr>
								<tr id="noSearchResults" hidden><td colspan="4" class="empty-state">No students match your search.</td></tr>
							</tbody>
						</table>
					</div>
					<p class="table-footnote">Showing sample records for layout preview.</p>
				</section>

				<footer class="page-footer"><span>Campus Student Records</span><span>Simple records, clearly organized.</span></footer>
			</div>
		</main>
	</div>
	<div class="sidebar-scrim" id="sidebarScrim"></div>
	<script>
		const menuToggle = document.getElementById('menuToggle');
		const sidebar = document.getElementById('sidebar');
		const sidebarScrim = document.getElementById('sidebarScrim');
		document.getElementById('todayDate').textContent = new Intl.DateTimeFormat('en', {
			weekday: 'long',
			month: 'long',
			day: 'numeric',
			year: 'numeric'
		}).format(new Date());

		function setSidebarOpen(isOpen) {
			sidebar.classList.toggle('is-open', isOpen);
			sidebarScrim.classList.toggle('is-visible', isOpen);
			menuToggle.setAttribute('aria-expanded', String(isOpen));
			menuToggle.setAttribute('aria-label', isOpen ? 'Close navigation' : 'Open navigation');
		}

		menuToggle.addEventListener('click', () => setSidebarOpen(!sidebar.classList.contains('is-open')));
		sidebarScrim.addEventListener('click', () => setSidebarOpen(false));

		const studentSearch = document.getElementById('studentSearch');
		const studentRows = Array.from(document.querySelectorAll('.student-row'));
		const noSearchResults = document.getElementById('noSearchResults');

		if (studentSearch) {
			studentSearch.addEventListener('input', () => {
				const searchTerm = studentSearch.value.trim().toLowerCase();
				let visibleCount = 0;

				studentRows.forEach((studentRow) => {
					const matches = studentRow.dataset.search.includes(searchTerm);
					studentRow.hidden = !matches;
					if (matches) visibleCount++;
				});

				if (noSearchResults) noSearchResults.hidden = visibleCount > 0;
			});
		}
	</script>
</body>
</html>
