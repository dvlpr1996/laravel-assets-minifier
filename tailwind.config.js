module.exports = {
	content: ["./resources/**/*.blade.php"],
	theme: {
		screens: {
			'xs': '360px',
			'sm': '640px',
			'md': '768px',
			'lg': '1024px',
			'xl': '1280px',
			'2xl': '1536px',
		},
		extend: {
			colors: {
				"btn-hover": "rgba(47, 129, 236, 0.87)",
				"primary": "#2F80ECff"
			}
		},
	},
	plugins: [],
}
