<template>
    <div>
        <b-navbar toggleable="lg" type="dark" variant="info">
            <b-navbar-brand href="/">MSMK Training</b-navbar-brand>

            <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

            <b-collapse id="nav-collapse" is-nav>
            <b-navbar-nav>
                <b-nav-item href="/">Home</b-nav-item>
                <b-nav-item href="/saves">Saves</b-nav-item>
            </b-navbar-nav>

            <b-navbar-nav class="ml-auto">
                <form action="/logout" method="POST">
					<input type="submit" value="Exit" class="button mt-0 py-1">
				</form>
            </b-navbar-nav>
            </b-collapse>
        </b-navbar>
    </div>
</template>
