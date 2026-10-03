

<?php
session_start();
if($_SESSION['email']!=true){
	header("Location:index.php");
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>
	<style>
		:root {
			--bg: #f4f7fb;
			--panel: #ffffff;
			--sidebar: #0f172a;
			--sidebar-soft: #1e293b;
			--primary: #2563eb;
			--primary-soft: #dbeafe;
			--success: #10b981;
			--warning: #f59e0b;
			--text: #1f2937;
			--muted: #6b7280;
			--line: #e5e7eb;
		}

		* {
			box-sizing: border-box;
		}

		body {
			margin: 0;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			background: linear-gradient(135deg, #eef6ff 0%, #f4f7fb 35%, #ecfdf5 100%);
			color: var(--text);
		}

		.dashboard-shell {
			display: flex;
			min-height: 100vh;
		}

		.sidebar {
			width: 280px;
			padding: 28px 20px;
			background: linear-gradient(180deg, var(--sidebar) 0%, var(--sidebar-soft) 100%);
			color: #ffffff;
			display: flex;
			flex-direction: column;
			gap: 28px;
		}

		.brand {
			display: flex;
			align-items: center;
			gap: 12px;
			padding: 8px 12px;
		}

		.brand-badge {
			width: 46px;
			height: 46px;
			display: grid;
			place-items: center;
			background: rgba(255,255,255,0.12);
			border: 1px solid rgba(255,255,255,0.15);
			border-radius: 14px;
			font-weight: 700;
			font-size: 1.2rem;
		}

		.brand h2 {
			margin: 0;
			font-size: 1.15rem;
		}

		.brand small {
			display: block;
			margin-top: 4px;
			opacity: 0.75;
			font-size: 0.7rem;
			letter-spacing: 0.12em;
			text-transform: uppercase;
		}

		.nav {
			display: grid;
			gap: 10px;
		}

		.nav a {
			display: flex;
			align-items: center;
			gap: 12px;
			padding: 12px 14px;
			border-radius: 12px;
			color: rgba(255,255,255,0.8);
			text-decoration: none;
			font-weight: 600;
			transition: 0.2s ease;
		}

		.nav a.active,
		.nav a:hover {
			background: rgba(255,255,255,0.08);
			color: #ffffff;
		}

		.nav .dot {
			width: 10px;
			height: 10px;
			border-radius: 50%;
			background: #60a5fa;
			box-shadow: 0 0 0 4px rgba(96,165,250,0.18);
		}

		.sidebar-card {
			margin-top: auto;
			padding: 18px 16px;
			border-radius: 18px;
			background: rgba(255,255,255,0.06);
			border: 1px solid rgba(255,255,255,0.08);
		}

		.sidebar-card .label {
			font-size: 0.74rem;
			letter-spacing: 0.08em;
			text-transform: uppercase;
			opacity: 0.75;
		}

		.sidebar-card p {
			margin: 12px 0 16px;
			line-height: 1.6;
			opacity: 0.9;
		}

		.logout-btn {
			display: inline-flex;
			align-items: center;
			justify-content: center;
			padding: 10px 16px;
			border-radius: 10px;
			background: #ffffff;
			color: var(--sidebar);
			text-decoration: none;
			font-weight: 700;
		}

		.content {
			flex: 1;
			padding: 32px;
		}

		.topbar {
			display: flex;
			justify-content: space-between;
			align-items: center;
			gap: 20px;
			padding: 18px 22px;
			background: rgba(255,255,255,0.7);
			backdrop-filter: blur(16px);
			border: 1px solid rgba(148,163,184,0.18);
			border-radius: 20px;
			box-shadow: 0 18px 40px rgba(15, 23, 42, 0.05);
		}

		.eyebrow {
			display: inline-block;
			margin-bottom: 8px;
			font-size: 0.74rem;
			letter-spacing: 0.12em;
			text-transform: uppercase;
			color: var(--muted);
			font-weight: 700;
		}

		.topbar h1 {
			margin: 0;
			font-size: clamp(2rem, 2.6vw, 2.8rem);
		}

		.stats-grid {
			display: grid;
			grid-template-columns: repeat(3, minmax(160px, 1fr));
			gap: 18px;
			margin-top: 26px;
		}

		.stat-card {
			padding: 22px 20px;
			border-radius: 18px;
			background: var(--panel);
			border: 1px solid var(--line);
			box-shadow: 0 14px 24px rgba(15, 23, 42, 0.04);
		}

		.stat-card .label {
			display: flex;
			justify-content: space-between;
			align-items: center;
			color: var(--muted);
			font-weight: 600;
			font-size: 0.8rem;
		}

		.stat-icon {
			width: 38px;
			height: 38px;
			display: grid;
			place-items: center;
			border-radius: 12px;
			font-size: 1.1rem;
		}

		.stat-card:nth-child(1) .stat-icon { background: var(--primary-soft); color: var(--primary); }
		.stat-card:nth-child(2) .stat-icon { background: #dcfce7; color: var(--success); }
		.stat-card:nth-child(3) .stat-icon { background: #fef3c7; color: var(--warning); }

		.stat-value {
			margin: 18px 0 8px;
			font-size: clamp(1.8rem, 2vw, 2.4rem);
			font-weight: 800;
		}

		.stat-card small {
			color: var(--muted);
			font-size: 0.8rem;
		}

		.panel {
			margin-top: 26px;
			padding: 22px;
			background: rgba(255,255,255,0.75);
			border: 1px solid var(--line);
			border-radius: 20px;
			box-shadow: 0 14px 30px rgba(15, 23, 42, 0.04);
		}

		.panel-header {
			display: flex;
			align-items: center;
			justify-content: space-between;
			margin-bottom: 16px;
		}

		.panel-header h2 {
			margin: 0;
			font-size: 1.4rem;
		}

		.session-box {
			margin: 0;
			padding: 18px;
			background: #f8fafc;
			border: 1px solid var(--line);
			border-radius: 16px;
			color: var(--text);
			white-space: pre-wrap;
			word-break: break-word;
			font-size: 0.9rem;
			line-height: 1.7;
		}

		@media (max-width: 900px) {
			.dashboard-shell {
				flex-direction: column;
			}

			.sidebar {
				width: 100%;
			}

			.content {
				padding: 20px;
			}
		}

		@media (max-width: 600px) {
			.topbar {
				padding: 16px 18px;
				flex-direction: column;
				align-items: flex-start;
			}

			.stats-grid {
				grid-template-columns: 1fr;
			}
		}
	</style>
</head>
<body>
	<div class="dashboard-shell">
		<aside class="sidebar">
			<div class="brand">
				<div class="brand-badge">A</div>
				<div>
					<h2>Admin Panel</h2>
					<small>Workspace</small>
				</div>
			</div>

			<nav class="nav">
				<a href="#" class="active"><span class="dot"></span> Dashboard</a>
				<a href="#"><span class="dot"></span> Users</a>
				<a href="#"><span class="dot"></span> Reports</a>
				<a href="#"><span class="dot"></span> Settings</a>
			</nav>

			<div class="sidebar-card">
				<div class="label">Status</div>
				<p>Everything is running smoothly and your account is active.</p>
				<a href="logout.php" class="logout-btn">Log Out</a>
			</div>
		</aside>

		<main class="content">
			<header class="topbar">
				<div>
					<span class="eyebrow">Overview</span>
					<h1>Welcom to dashboard</h1>
				</div>
				<a href="logout.php" class="logout-btn">Log Out</a>
			</header>

			<section class="stats-grid">
				<div class="stat-card">
					<div class="label">
						<span>Total Users</span>
						<span class="stat-icon">👥</span>
					</div>
					<div class="stat-value">1,284</div>
					<small>+12.4% from last month</small>
				</div>

				<div class="stat-card">
					<div class="label">
						<span>Active Sessions</span>
						<span class="stat-icon">📊</span>
					</div>
					<div class="stat-value">327</div>
					<small>+8.1% from last week</small>
				</div>

				<div class="stat-card">
					<div class="label">
						<span>Conversion</span>
						<span class="stat-icon">📈</span>
					</div>
					<div class="stat-value">89%</div>
					<small>+4.6% this quarter</small>
				</div>
			</section>

			<section class="panel">
				<div class="panel-header">
					<div>
						<span class="eyebrow">Session</span>
						<h2>Current user details</h2>
					</div>
				</div>
				<pre class="session-box"><?php print_r($_SESSION); ?></pre>
			</section>
		</main>
	</div>
</body>
</html>