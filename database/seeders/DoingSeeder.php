<?php

namespace Database\Seeders;

use App\Models\Doing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $relief = '<?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 27.3.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 82.96 81.92" style="enable-background:new 0 0 82.96 81.92;" xml:space="preserve">
<style type="text/css">
	.st0{fill:none;stroke:#ED1C24;stroke-miterlimit:10;}
	.st1{fill:#DE212C;}
</style>
<g>
	<path class="st0" d="M18.1,48.33l3.42,0.87h3.45c0.83,0,1.57-0.55,1.78-1.35c0.06-0.23,0.13-0.45,0.22-0.67
		c0.24-0.6-0.19-1.25-0.84-1.25H18.9c-0.83,0-1.51,0.68-1.51,1.51l0,0C17.4,47.86,17.69,48.23,18.1,48.33z M64.45,37.33l-2.63-7.9
		c-0.05-0.15-0.07-0.3-0.07-0.45v-0.52c0-0.79-0.64-1.43-1.43-1.43h-6.25c-0.79,0-1.43,0.64-1.43,1.43V44.5
		c0,0.79-0.64,1.43-1.43,1.43H38.65c-0.95,0-1.62,0.9-1.37,1.82c0.02,0.09,0.05,0.17,0.07,0.26c0.15,0.68,0.71,1.19,1.41,1.19h14.41
		c0.67,0,1.28-0.44,1.42-1.1c0.51-2.48,2.71-4.35,5.35-4.35c2.12,0,3.95,1.22,4.85,2.98c0.22,0.42,0.38,0.88,0.48,1.37
		c0.52,0.41,0.88,0.69,1.4,1.11h1.65c0.79,0,1.43-0.64,1.43-1.43v-6.71c0-0.57-0.34-1.09-0.87-1.31l-3.64-1.56
		C64.87,38.03,64.58,37.71,64.45,37.33z M55.21,37.94v-6.55h5.09l2.18,6.55H55.21z M32.04,45.21c-2.21,0-4,1.79-4,3.99
		c0,2.21,1.79,4,4,4c2.2,0,3.99-1.79,3.99-4C36.03,47,34.24,45.21,32.04,45.21 M32.04,51.38c-1.21,0-2.19-0.98-2.19-2.18
		s0.98-2.18,2.19-2.18c1.2,0,2.18,0.98,2.18,2.18S33.24,51.38,32.04,51.38 M59.93,45.21c-2.21,0-4,1.79-4,3.99c0,2.21,1.79,4,4,4
		c2.2,0,4-1.79,4-4C63.93,47,62.14,45.21,59.93,45.21 M59.93,51.38c-1.21,0-2.18-0.98-2.18-2.18s0.98-2.18,2.18-2.18
		s2.18,0.98,2.18,2.18S61.14,51.38,59.93,51.38 M48.44,44.68H19.95c-1.41,0-2.55-1.14-2.55-2.55v-15.9c0-1.13,0.92-2.05,2.05-2.05
		h29.2c1.16,0,2.11,0.94,2.11,2.11v16.08C50.76,43.64,49.72,44.68,48.44,44.68z"/>
</g>
<path class="st1" d="M38.44,28.97c-0.31-0.17-0.62-0.32-0.96-0.44c-0.4-0.14-0.81-0.23-1.24-0.27c-0.28-0.03-0.56-0.04-0.84-0.02
	c-1.84,0.09-3.46,1.07-4.41,2.6c-0.4,0.64-0.65,1.34-0.76,2.1c-0.06,0.41-0.07,0.83-0.03,1.24c0.14,1.42,0.73,2.61,1.78,3.57
	c0.73,0.66,1.58,1.1,2.54,1.3c0.49,0.1,0.98,0.14,1.48,0.11c0.93-0.06,1.78-0.33,2.58-0.81c0.02-0.01,0.04-0.03,0.07-0.03l0,0
	c0,0.03-0.03,0.04-0.05,0.06c-0.79,0.82-1.73,1.4-2.82,1.75c-0.43,0.14-0.87,0.23-1.31,0.27c-0.37,0.04-0.75,0.05-1.13,0.02
	c-1.05-0.07-2.04-0.36-2.95-0.89c-1.28-0.75-2.22-1.8-2.81-3.16c-0.27-0.62-0.43-1.26-0.5-1.93c-0.05-0.44-0.05-0.88-0.01-1.33
	c0.15-1.48,0.72-2.78,1.71-3.88c0.79-0.87,1.75-1.49,2.86-1.86c0.43-0.14,0.87-0.24,1.32-0.29c0.44-0.05,0.87-0.06,1.31-0.03
	c0.9,0.07,1.76,0.31,2.57,0.73c0.59,0.3,1.11,0.68,1.59,1.14c0.01,0.01,0.02,0.02,0.03,0.03C38.46,28.97,38.46,28.97,38.44,28.97"/>
</svg>';
        $medical = '<?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 27.3.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 82.96 81.92" style="enable-background:new 0 0 82.96 81.92;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#DE212C;}
</style>
<g>
	<g>
		<path class="st0" d="M49.77,35.88c-0.36-0.2-0.74-0.38-1.13-0.52c-0.48-0.16-0.96-0.27-1.46-0.32c-0.33-0.03-0.66-0.05-1-0.03
			c-2.18,0.11-4.1,1.27-5.22,3.08c-0.47,0.76-0.77,1.59-0.9,2.48c-0.07,0.49-0.09,0.98-0.04,1.47c0.16,1.68,0.87,3.09,2.11,4.22
			c0.86,0.79,1.87,1.3,3.01,1.54c0.58,0.12,1.16,0.17,1.75,0.13c1.1-0.07,2.11-0.39,3.05-0.96c0.02-0.02,0.05-0.04,0.08-0.04l0,0
			c-0.01,0.03-0.03,0.05-0.05,0.07c-0.94,0.97-2.05,1.66-3.33,2.07c-0.51,0.16-1.02,0.27-1.55,0.32c-0.44,0.05-0.89,0.06-1.33,0.03
			c-1.24-0.08-2.41-0.42-3.49-1.05c-1.51-0.89-2.62-2.13-3.33-3.74c-0.32-0.73-0.51-1.49-0.59-2.29c-0.06-0.52-0.06-1.05-0.01-1.57
			c0.17-1.75,0.85-3.29,2.03-4.59c0.93-1.03,2.07-1.76,3.38-2.2c0.51-0.17,1.03-0.28,1.56-0.34c0.52-0.06,1.03-0.07,1.55-0.03
			c1.07,0.09,2.08,0.37,3.04,0.86c0.69,0.36,1.32,0.81,1.88,1.35c0.01,0.01,0.02,0.02,0.03,0.04C49.8,35.88,49.79,35.89,49.77,35.88
			"/>
	</g>
	<path class="st0" d="M24.85,32.56c0.12-0.45,0.19-0.91,0.35-1.33c0.67-1.81,2.05-2.79,3.91-3c1.27-0.15,2.57-0.08,3.85-0.09
		c1.07-0.01,2.14,0,3.27,0c0-0.17,0-0.32,0-0.46c0.02-0.86-0.01-1.72,0.06-2.57c0.09-0.98,0.91-1.74,1.88-1.85
		c0.22-0.02,0.45-0.03,0.68-0.03c2.92,0,5.83,0,8.75,0c1.51,0,2.43,0.89,2.45,2.4c0.01,0.82,0,1.64,0,2.51c0.15,0,0.28,0,0.4,0
		c1.88,0,3.76-0.01,5.64,0c1.24,0.01,2.41,0.26,3.43,1c1.06,0.77,1.63,1.84,1.82,3.12c0.07,0.43,0.08,0.88,0.08,1.32
		c0.01,5.36,0,10.72,0.01,16.08c0,1.14-0.21,2.23-0.87,3.18c-0.87,1.26-2.13,1.88-3.61,2.01c-0.91,0.08-1.83,0.07-2.75,0.07
		c-7.95,0-15.91,0-23.86,0c-1.09,0-2.16-0.16-3.13-0.72c-1.33-0.77-2.05-1.94-2.29-3.43c-0.01-0.09-0.05-0.18-0.08-0.26
		C24.85,44.52,24.85,38.54,24.85,32.56z M43.17,29.66c-4.24,0-8.48,0-12.72,0c-0.33,0-0.67,0.01-1,0.05c-1,0.12-1.89,0.48-2.48,1.35
		c-0.51,0.75-0.61,1.61-0.61,2.49c0,5.26,0,10.53,0,15.79c0,0.38,0.01,0.76,0.07,1.14c0.2,1.36,0.89,2.33,2.25,2.69
		c0.52,0.14,1.08,0.2,1.62,0.2c8.56,0.01,17.12,0.01,25.69,0.01c0.23,0,0.45,0.01,0.68-0.01c1.21-0.11,2.24-0.54,2.84-1.68
		c0.36-0.69,0.43-1.45,0.43-2.22c0-5.25,0-10.51,0-15.76c0-0.38-0.02-0.76-0.07-1.14c-0.15-1.36-0.97-2.35-2.29-2.7
		c-0.52-0.14-1.08-0.2-1.62-0.2C51.7,29.65,47.43,29.66,43.17,29.66z M48.53,28.12c0-0.84,0-1.64,0-2.43c0-0.81-0.18-0.99-0.99-0.99
		c-2.67,0-5.34,0-8,0c-0.35,0-0.69-0.01-1.04,0c-0.49,0.02-0.71,0.25-0.73,0.74c-0.01,0.25,0,0.5,0,0.75c0,0.64,0,1.28,0,1.93
		C41.38,28.12,44.93,28.12,48.53,28.12z"/>
</g>
</svg>';
        $emergency = '<?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 27.3.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 82.96 81.92" style="enable-background:new 0 0 82.96 81.92;" xml:space="preserve">
<style type="text/css">
	.st0{fill:none;stroke:#DE212C;stroke-width:1.4173;stroke-miterlimit:10;}
	.st1{fill:#DE212C;}
</style>
<g>
	<path class="st0" d="M65.31,39.25h-0.47V35.9c0-3.08-5.77-5.69-5.77-5.69l-5.39-3.22c0-1.85-1.51-3.36-3.36-3.36H20.23
		c-1.85,0-3.36,1.51-3.36,3.36v25.64h5.58c0-2.28,1.14-4.37,3.05-5.61c1.09-0.7,2.35-1.08,3.65-1.08c3.69,0,6.69,3,6.69,6.69h13.39
		c0-2.39,1.28-4.61,3.35-5.79c1.03-0.59,2.18-0.9,3.35-0.9c3.69,0,6.69,3,6.69,6.69h6.1c0.95,0,1.71-0.76,1.71-1.71v-6.57
		C70.42,41.53,68.13,39.25,65.31,39.25z M61.49,39.25h-7.81v-5.58h4.58c1.78,0,3.22,1.44,3.22,3.22L61.49,39.25L61.49,39.25z"/>
	<path class="st0" d="M29.15,48.17c-0.89,0-1.73,0.27-2.43,0.73c-1.23,0.79-2.03,2.18-2.03,3.74c0,2.47,2,4.46,4.46,4.46
		s4.46-2,4.46-4.46S31.61,48.17,29.15,48.17z"/>
	<path class="st0" d="M55.92,48.17c-0.81,0-1.57,0.22-2.23,0.6c-1.34,0.77-2.23,2.21-2.23,3.86c0,2.47,2,4.46,4.46,4.46
		s4.46-2,4.46-4.46S58.38,48.17,55.92,48.17z"/>
	<path class="st1" d="M47.54,30.27c-0.29-0.16-0.58-0.3-0.89-0.41c-0.38-0.13-0.76-0.21-1.16-0.26c-0.26-0.03-0.53-0.04-0.79-0.02
		c-1.72,0.09-3.24,1-4.13,2.44c-0.37,0.6-0.61,1.26-0.71,1.96c-0.06,0.39-0.07,0.78-0.03,1.16c0.13,1.33,0.69,2.44,1.67,3.34
		c0.68,0.62,1.48,1.03,2.38,1.22c0.46,0.1,0.92,0.13,1.38,0.11c0.87-0.05,1.67-0.31,2.41-0.76c0.02-0.01,0.04-0.03,0.06-0.03l0,0
		c0,0.03-0.03,0.04-0.04,0.05c-0.74,0.77-1.62,1.31-2.64,1.64c-0.4,0.13-0.81,0.21-1.23,0.26c-0.35,0.04-0.7,0.05-1.06,0.02
		c-0.98-0.06-1.91-0.33-2.76-0.83c-1.2-0.7-2.08-1.69-2.63-2.96c-0.25-0.58-0.4-1.18-0.47-1.81c-0.04-0.41-0.05-0.83-0.01-1.24
		c0.14-1.39,0.67-2.6,1.61-3.64c0.74-0.82,1.64-1.39,2.68-1.74c0.4-0.13,0.81-0.22,1.23-0.27c0.41-0.05,0.82-0.06,1.23-0.03
		c0.85,0.07,1.65,0.29,2.41,0.68c0.55,0.28,1.04,0.64,1.49,1.07c0.01,0.01,0.02,0.02,0.03,0.03C47.56,30.27,47.56,30.28,47.54,30.27
		"/>
	<g>
		<path class="st1" d="M23.32,31.64v6.05h-1.25v-4.63c-0.09,0.06-0.22,0.14-0.39,0.24c-0.25,0.15-0.43,0.26-0.54,0.33
			c-0.08-0.14-0.22-0.37-0.42-0.7l-0.06-0.09c-0.04-0.08-0.08-0.14-0.11-0.18c0.2-0.15,0.53-0.37,0.97-0.66
			c0.23-0.15,0.41-0.28,0.54-0.37h1.26V31.64z"/>
		<path class="st1" d="M26.26,34.99h-0.91v-1.01h0.91c0.25,0,0.43-0.03,0.53-0.1c0.15-0.11,0.22-0.3,0.22-0.58
			c0-0.22-0.06-0.39-0.19-0.52c-0.13-0.13-0.3-0.2-0.52-0.2c-0.39,0-0.79,0.18-1.21,0.54l-0.46-0.8c0.53-0.52,1.13-0.77,1.8-0.77
			c0.56,0,1.02,0.16,1.38,0.47c0.34,0.31,0.52,0.7,0.52,1.19c0,0.6-0.25,1-0.75,1.2c0.64,0.25,0.96,0.73,0.96,1.43
			c0,0.75-0.25,1.29-0.76,1.63c-0.36,0.24-0.8,0.35-1.34,0.35c-0.29,0-0.63-0.08-1-0.23c-0.37-0.16-0.68-0.35-0.91-0.57l0.51-0.76
			c0.34,0.31,0.78,0.47,1.32,0.47c0.27,0,0.49-0.08,0.65-0.23c0.16-0.16,0.24-0.37,0.24-0.64C27.23,35.27,26.91,34.99,26.26,34.99z"
			/>
		<path class="st1" d="M31.07,34.99h-0.91v-1.01h0.91c0.25,0,0.43-0.03,0.53-0.1c0.15-0.11,0.22-0.3,0.22-0.58
			c0-0.22-0.06-0.39-0.19-0.52c-0.13-0.13-0.3-0.2-0.52-0.2c-0.39,0-0.79,0.18-1.21,0.54l-0.46-0.8c0.53-0.52,1.13-0.77,1.8-0.77
			c0.56,0,1.02,0.16,1.38,0.47c0.34,0.31,0.52,0.7,0.52,1.19c0,0.6-0.25,1-0.75,1.2c0.64,0.25,0.96,0.73,0.96,1.43
			c0,0.75-0.25,1.29-0.76,1.63c-0.36,0.24-0.8,0.35-1.34,0.35c-0.29,0-0.63-0.08-1-0.23c-0.37-0.16-0.68-0.35-0.91-0.57l0.51-0.76
			c0.34,0.31,0.78,0.47,1.32,0.47c0.27,0,0.49-0.08,0.65-0.23c0.16-0.16,0.24-0.37,0.24-0.64C32.04,35.27,31.72,34.99,31.07,34.99z"
			/>
	</g>
	<path class="st1" d="M49.26,23.65h-7.99c-0.79,0-1.44-0.65-1.44-1.44V22.1c0-0.79,0.65-1.44,1.44-1.44h7.99
		c0.79,0,1.44,0.65,1.44,1.44v0.11C50.7,23,50.05,23.65,49.26,23.65z"/>
	<path class="st1" d="M49.04,19.39L49.04,19.39c0.25,0.18,0.6,0.12,0.78-0.13l3.07-4.29c0.18-0.25,0.12-0.6-0.13-0.78l0,0
		c-0.25-0.18-0.6-0.12-0.78,0.13l-3.07,4.29C48.73,18.86,48.79,19.21,49.04,19.39z"/>
	<path class="st1" d="M41.3,19.39L41.3,19.39c-0.25,0.18-0.6,0.12-0.78-0.13l-3.07-4.29c-0.18-0.25-0.12-0.6,0.13-0.78l0,0
		c0.25-0.18,0.6-0.12,0.78,0.13l3.07,4.29C41.61,18.86,41.55,19.21,41.3,19.39z"/>
	<path class="st1" d="M45.26,12.23L45.26,12.23c0.31,0,0.56,0.25,0.56,0.56v5.28c0,0.31-0.25,0.56-0.56,0.56l0,0
		c-0.31,0-0.56-0.25-0.56-0.56v-5.28C44.7,12.48,44.95,12.23,45.26,12.23z"/>
</g>
</svg>';
        $community = '<?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 27.3.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 82.96 81.92" style="enable-background:new 0 0 82.96 81.92;" xml:space="preserve">
<style type="text/css">
	.st0{fill:none;stroke:#DE212C;stroke-width:1.1339;stroke-miterlimit:10;}
</style>
<g>
	<path class="st0" d="M44.7,42.37l5.07-5.02c0.54-0.55,1.42-0.55,1.97,0s0.54,1.45,0,2l-2.53,2.43c-0.32,0.32-0.32,0.84,0,1.16
		s0.83,0.32,1.14,0l3.13-3.34V28.94c0-1.1,0.91-2,2-2s2,0.9,2,2v11.6c0,0.53-0.21,1.04-0.58,1.42l-7.42,7.65v6h-6v-10
		C43.48,44.27,43.83,43.26,44.7,42.37z"/>
	<path class="st0" d="M38.26,42.37l-5.07-5.02c-0.54-0.55-1.42-0.55-1.97,0s-0.54,1.45,0,2l2.53,2.43c0.32,0.32,0.32,0.84,0,1.16
		s-0.83,0.32-1.14,0l-3.13-3.34V28.94c0-1.1-0.91-2-2-2s-2,0.9-2,2v11.6c0,0.53,0.21,1.04,0.58,1.42l7.42,7.65v6h6v-10
		C39.48,44.27,39.13,43.26,38.26,42.37z"/>
	<circle class="st0" cx="41.48" cy="29.61" r="6"/>
</g>
</svg>';
        $water = '<?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 27.3.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 82.96 81.92" style="enable-background:new 0 0 82.96 81.92;" xml:space="preserve">
<style type="text/css">
	.st0{fill:none;stroke:#DE212C;stroke-width:1.4173;stroke-miterlimit:10;}
</style>
<g>
	<path class="st0" d="M46.58,37.44c-2.92,0-5.28-2.36-5.28-5.26c0-2.63,4.33-8.18,5.15-9.2c0.07-0.09,0.2-0.09,0.26,0
		c0.83,1.02,5.15,6.57,5.15,9.2C51.87,35.08,49.5,37.44,46.58,37.44z"/>
	<path class="st0" d="M32.71,42.06h0.66h8.25c0.63,0,1.22,0.26,1.63,0.68c0.42,0.42,0.68,1,0.68,1.63c0,1.27-1.04,2.31-2.31,2.31
		H39.1H38c-0.36,0-0.69,0.15-0.93,0.39c-0.24,0.24-0.39,0.57-0.39,0.93c0,0.73,0.59,1.32,1.32,1.32h1.24h4.7
		c0.35,0,0.81-0.15,1.06-0.4l8.97-8.74c1.1-1.09,2.91-1.03,3.92,0.2c0.88,1.06,0.72,2.65-0.26,3.63l-10.06,9.82
		c-0.5,0.5-1.17,0.77-1.87,0.77h-8.37h-3.96H32.7c-3.28,0-5.94-2.66-5.94-5.94V48C26.77,44.72,29.43,42.06,32.71,42.06z"/>
</g>
</svg>';
        $cash = '<?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 27.3.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 82.96 81.92" style="enable-background:new 0 0 82.96 81.92;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#DE212C;}
</style>
<g>
	<path class="st0" d="M30.23,17.94c0.2,0.08,0.41,0.08,0.62,0.11c0.3,0.05,0.6,0.09,0.89,0.13c0.29,0.04,0.58,0.08,0.87,0.12
		c0.3,0.04,0.6,0.09,0.89,0.13c0.29,0.04,0.58,0.08,0.87,0.12c0.35,0.05,0.7,0.11,1.05,0.16c0.29,0.04,0.58,0.08,0.87,0.12
		c0.3,0.04,0.6,0.09,0.89,0.13c0.28,0.04,0.57,0.08,0.85,0.12c0.3,0.04,0.6,0.09,0.91,0.13c0.29,0.04,0.59,0.07,0.88,0.12
		c0.29,0.04,0.59,0.09,0.88,0.14c0.28,0.04,0.55,0.07,0.83,0.11c0.43,0.06,0.87,0.13,1.3,0.19c0.36,0.05,0.72,0.09,1.07,0.14
		c0.36,0.05,0.71,0.11,1.07,0.16s0.72,0.09,1.07,0.14c0.36,0.05,0.71,0.11,1.07,0.16c0.35,0.05,0.7,0.1,1.04,0.15
		c0.36,0.05,0.71,0.11,1.07,0.16c0.28,0.04,0.57,0.08,0.85,0.12c0.3,0.04,0.6,0.09,0.91,0.13c0.29,0.04,0.58,0.08,0.87,0.12
		c0.29,0.04,0.59,0.09,0.88,0.13c0.29,0.04,0.58,0.08,0.87,0.12c0.29,0.04,0.58,0.09,0.87,0.13c0.28,0.04,0.57,0.08,0.85,0.12
		c0.3,0.04,0.6,0.09,0.91,0.13c0.29,0.04,0.58,0.08,0.87,0.12c0.29,0.04,0.59,0.09,0.88,0.13c0.29,0.04,0.58,0.08,0.87,0.12
		c0.3,0.04,0.6,0.09,0.89,0.13c0.28,0.04,0.56,0.08,0.84,0.12c0.62,0.09,1.25,0.13,1.82,0.44c0.46,0.26,0.83,0.6,1.11,1.06
		c0.21,0.34,0.33,0.71,0.4,1.1c0.05,0.3,0.03,0.61-0.01,0.92c-0.06,0.41-0.11,0.81-0.17,1.22c-0.04,0.31-0.1,0.61-0.14,0.92
		c-0.04,0.27-0.07,0.53-0.11,0.8c-0.06,0.38-0.12,0.75-0.17,1.13c-0.04,0.29-0.07,0.58-0.11,0.88c-0.04,0.29-0.1,0.58-0.14,0.87
		c-0.04,0.34-0.09,0.68-0.14,1.02c-0.05,0.31-0.08,0.62-0.14,0.93c-0.05,0.29-0.08,0.58-0.12,0.87c-0.04,0.28-0.08,0.56-0.12,0.83
		c-0.04,0.29-0.09,0.59-0.13,0.88c-0.04,0.3-0.09,0.6-0.13,0.89s-0.08,0.58-0.12,0.87c-0.04,0.3-0.09,0.59-0.13,0.89
		c-0.04,0.28-0.08,0.57-0.12,0.85c-0.04,0.3-0.09,0.6-0.13,0.91c-0.04,0.28-0.08,0.57-0.12,0.85c-0.05,0.36-0.11,0.71-0.16,1.07
		c-0.04,0.28-0.08,0.55-0.12,0.83c-0.05,0.32-0.09,0.63-0.14,0.95c0,0.03,0,0.06,0,0.1c-0.04,0.25-0.08,0.49-0.11,0.74
		c-0.08,0.6-0.28,1.14-0.67,1.6c-0.4,0.47-0.89,0.78-1.47,0.95c-0.12,0.03-0.15,0.08-0.15,0.2c0.01,1.03,0.01,2.05,0,3.08
		c0,0.82-0.22,1.57-0.74,2.22c-0.47,0.57-1.06,0.95-1.77,1.15c-0.3,0.08-0.61,0.11-0.92,0.11c-10.2,0-20.41,0-30.61,0
		c-0.67,0-1.29-0.2-1.84-0.56c-0.52-0.35-0.91-0.81-1.17-1.38c-0.2-0.44-0.31-0.9-0.31-1.39c0-6.35,0-12.7,0-19.06
		c0-0.6,0.21-1.14,0.52-1.64c0.14-0.22,0.3-0.43,0.49-0.61c0.43-0.4,0.93-0.69,1.51-0.83c0.51-0.13,1.04-0.1,1.56-0.1
		c0.19,0,0.18,0,0.19-0.2c0.02-0.23,0.07-0.45,0.1-0.68c0.03-0.22,0.06-0.45,0.09-0.67s0.06-0.45,0.09-0.67
		c0.03-0.23,0.07-0.46,0.1-0.69c0.03-0.22,0.07-0.45,0.1-0.67s0.06-0.45,0.1-0.67c0.03-0.23,0.07-0.46,0.1-0.7
		c0.03-0.22,0.06-0.45,0.09-0.67c0.03-0.23,0.07-0.46,0.11-0.7c0.03-0.22,0.06-0.44,0.09-0.66c0.03-0.24,0.07-0.47,0.1-0.71
		c0.03-0.21,0.06-0.41,0.08-0.62c0.05-0.4,0.18-0.78,0.37-1.13c0.29-0.52,0.72-0.91,1.25-1.17c0.48-0.24,1-0.34,1.55-0.3
		C30.12,17.94,30.17,18,30.23,17.94z M60.23,38.14c0.07-0.29,0.09-0.58,0.14-0.87c0.05-0.29,0.08-0.58,0.12-0.87
		c0.04-0.3,0.09-0.6,0.13-0.91c0.04-0.28,0.08-0.57,0.12-0.85c0.04-0.3,0.09-0.59,0.13-0.89c0.04-0.28,0.08-0.56,0.12-0.84
		c0.04-0.29,0.09-0.59,0.13-0.88s0.08-0.58,0.12-0.87c0.04-0.3,0.09-0.6,0.13-0.91c0.04-0.28,0.08-0.57,0.12-0.85
		c0.04-0.29,0.09-0.59,0.13-0.88c0.04-0.29,0.07-0.58,0.12-0.87c0.05-0.35,0.11-0.69,0.16-1.04c0.05-0.36,0.07-0.72,0.15-1.07
		c0.13-0.58-0.32-1.26-0.99-1.29c-0.22-0.01-0.43-0.06-0.65-0.09c-0.28-0.04-0.56-0.09-0.84-0.13c-0.29-0.04-0.59-0.09-0.88-0.13
		c-0.36-0.05-0.72-0.1-1.09-0.15c-0.29-0.04-0.58-0.08-0.87-0.12c-0.29-0.04-0.59-0.09-0.88-0.13c-0.29-0.04-0.58-0.08-0.87-0.12
		c-0.3-0.04-0.6-0.09-0.91-0.13c-0.28-0.04-0.57-0.08-0.85-0.12c-0.3-0.04-0.6-0.09-0.89-0.13c-0.28-0.04-0.56-0.08-0.84-0.12
		c-0.29-0.04-0.59-0.09-0.88-0.13c-0.29-0.04-0.58-0.08-0.87-0.12c-0.3-0.04-0.6-0.09-0.91-0.13c-0.28-0.04-0.57-0.08-0.85-0.12
		c-0.3-0.04-0.6-0.09-0.89-0.13c-0.29-0.04-0.58-0.08-0.87-0.12c-0.28-0.04-0.57-0.09-0.85-0.13c-0.29-0.04-0.58-0.08-0.87-0.12
		c-0.3-0.04-0.6-0.09-0.91-0.13c-0.28-0.04-0.57-0.08-0.85-0.12c-0.3-0.04-0.6-0.09-0.91-0.13c-0.28-0.04-0.55-0.08-0.83-0.12
		c-0.29-0.04-0.59-0.09-0.88-0.13c-0.29-0.04-0.58-0.08-0.87-0.12c-0.3-0.04-0.6-0.09-0.91-0.13c-0.28-0.04-0.57-0.08-0.85-0.12
		c-0.3-0.04-0.6-0.09-0.89-0.13c-0.29-0.04-0.58-0.08-0.87-0.12c-0.29-0.04-0.58-0.09-0.87-0.13c-0.29-0.04-0.59-0.09-0.88-0.13
		c-0.29-0.04-0.58-0.08-0.87-0.12c-0.29-0.04-0.58-0.07-0.87-0.12c-0.28-0.05-0.56-0.08-0.84-0.13c-0.29-0.05-0.59-0.09-0.88-0.13
		c-0.19-0.03-0.38-0.08-0.58-0.06c-0.59-0.02-0.94,0.21-1.14,0.76c-0.1,0.27-0.09,0.55-0.14,0.83c-0.05,0.29-0.08,0.58-0.12,0.87
		c-0.05,0.34-0.11,0.68-0.16,1.02c-0.04,0.3-0.08,0.6-0.12,0.91c-0.05,0.36-0.12,0.71-0.16,1.07c-0.05,0.41-0.13,0.82-0.17,1.23
		c-0.04,0.36-0.11,0.73-0.16,1.09s-0.09,0.71-0.14,1.07c-0.03,0.18-0.03,0.18,0.14,0.18c9.22,0,18.44,0,27.66,0
		c0.23,0,0.46,0.02,0.68,0.07c0.65,0.12,1.22,0.42,1.7,0.88c0.7,0.68,1.02,1.51,1.02,2.47c0.01,4.42,0,8.83,0,13.25
		c0,0.05,0,0.1,0,0.17c0.16-0.16,0.31-0.29,0.37-0.5c0.06-0.2,0.08-0.41,0.11-0.61c0.04-0.3,0.09-0.6,0.13-0.9
		c0.03-0.22,0.06-0.44,0.09-0.66c0.04-0.29,0.09-0.58,0.13-0.87c0.04-0.29,0.07-0.59,0.12-0.88c0.05-0.35,0.11-0.71,0.16-1.06
		c0.05-0.35,0.09-0.7,0.14-1.05C60.14,38.81,60.21,38.48,60.23,38.14z M40.11,52.55c5.13,0,10.26,0,15.39,0
		c0.1,0,0.21-0.01,0.31-0.04c0.72-0.23,1.15-0.77,1.15-1.52c0.01-6.25,0-12.49,0-18.74c0-0.13-0.01-0.27-0.04-0.39
		c-0.08-0.31-0.24-0.57-0.49-0.79c-0.29-0.25-0.63-0.37-1.01-0.37c-10.17,0-20.34,0-30.52,0c-0.13,0-0.27,0.01-0.4,0.04
		c-0.67,0.12-1.19,0.77-1.19,1.42c0,6.3,0,12.6,0,18.9c0,0.18,0.03,0.34,0.09,0.51c0.2,0.55,0.8,0.98,1.39,0.98
		C29.91,52.54,35.01,52.55,40.11,52.55z"/>
	<path class="st0" d="M30.16,39.56c-1.74,0-3.48,0-5.21,0c-0.13,0-0.16-0.04-0.16-0.16c0-2.22,0-4.44,0-6.66
		c0-0.13,0.03-0.16,0.16-0.16c3.48,0,6.95,0,10.43,0c0.13,0,0.15,0.04,0.15,0.16c0,2.22,0,4.44,0,6.66c0,0.13-0.03,0.16-0.16,0.16
		C33.64,39.56,31.9,39.56,30.16,39.56z M30.15,37.7c1.13,0,2.26,0,3.39,0c0.1,0,0.13-0.03,0.13-0.13c0-1,0-2,0-2.99
		c0-0.1-0.03-0.13-0.13-0.13c-2.25,0-4.51,0-6.76,0c-0.11,0-0.13,0.03-0.13,0.13c0,0.99,0,1.99,0,2.98c0,0.12,0.03,0.14,0.14,0.14
		C27.92,37.7,29.03,37.7,30.15,37.7z"/>
	<path class="st0" d="M51.13,49.85c-0.47,0-0.99-0.16-1.47-0.45c-0.06-0.04-0.1-0.03-0.16,0c-0.6,0.37-1.27,0.52-1.96,0.43
		c-1.14-0.16-1.95-0.79-2.42-1.85c-0.13-0.29-0.19-0.6-0.22-0.91c-0.08-0.74,0.15-1.39,0.55-2c0.43-0.66,1.06-1.04,1.81-1.21
		c0.46-0.11,0.94-0.09,1.4,0.03c0.3,0.07,0.58,0.19,0.84,0.35c0.06,0.04,0.11,0.02,0.15,0c0.39-0.24,0.82-0.37,1.27-0.42
		c0.75-0.07,1.44,0.09,2.06,0.52c0.62,0.44,1.02,1.02,1.21,1.77c0.35,1.43-0.39,2.91-1.72,3.48C52.07,49.77,51.61,49.87,51.13,49.85
		z M52.39,46.81c0-0.63-0.49-1.13-1.09-1.16c-0.64-0.03-1.24,0.51-1.23,1.17c0.01,0.64,0.56,1.18,1.17,1.17
		C51.79,48,52.43,47.57,52.39,46.81z M47.91,45.66c-0.45,0.01-0.79,0.21-1.01,0.6c-0.23,0.39-0.21,0.78,0.02,1.17
		c0.24,0.41,0.81,0.72,1.38,0.5c0.06-0.02,0.12-0.02,0.08-0.13c-0.08-0.21-0.14-0.44-0.15-0.67c-0.02-0.43-0.01-0.85,0.15-1.26
		c0.03-0.07,0.01-0.12-0.07-0.15C48.17,45.68,48.05,45.65,47.91,45.66z"/>
	<path class="st0" d="M49.37,32.59c1.59,0,3.19,0,4.78,0c0.12,0,0.14,0.03,0.14,0.14c-0.01,0.53-0.01,1.07,0,1.6
		c0,0.09-0.02,0.12-0.11,0.12c-3.22,0-6.43,0-9.65,0c-0.09,0-0.11-0.03-0.11-0.12c0-0.53,0.01-1.07,0-1.6
		c0-0.12,0.03-0.14,0.14-0.14C46.16,32.59,47.76,32.59,49.37,32.59z"/>
	<path class="st0" d="M30.17,48.48c0.34,0,0.69,0,1.03,0c0.09,0,0.13,0.02,0.13,0.12c-0.01,0.54,0,1.09,0,1.63
		c0,0.09-0.02,0.12-0.11,0.12c-0.7,0-1.39,0-2.09,0c-0.1,0-0.11-0.03-0.11-0.12c0-0.54,0-1.09,0-1.63c0-0.1,0.04-0.12,0.13-0.12
		C29.48,48.49,29.83,48.48,30.17,48.48z"/>
	<path class="st0" d="M26.79,50.34c-0.34,0-0.69,0-1.03,0c-0.09,0-0.13-0.01-0.13-0.12c0.01-0.54,0-1.09,0-1.63
		c0-0.09,0.02-0.12,0.11-0.12c0.69,0,1.38,0,2.08,0c0.09,0,0.12,0.02,0.12,0.11c0,0.55,0,1.1,0,1.64c0,0.08-0.02,0.11-0.11,0.11
		C27.49,50.34,27.14,50.34,26.79,50.34z"/>
	<path class="st0" d="M33.55,48.48c0.35,0,0.7,0,1.05,0c0.09,0,0.11,0.02,0.11,0.11c0,0.55,0,1.1,0,1.66c0,0.08-0.03,0.1-0.1,0.1
		c-0.7,0-1.4,0-2.1,0c-0.08,0-0.1-0.02-0.1-0.1c0-0.55,0-1.1,0-1.66c0-0.08,0.02-0.11,0.11-0.11C32.85,48.49,33.2,48.48,33.55,48.48
		z"/>
	<path class="st0" d="M36.93,48.48c0.35,0,0.7,0,1.04,0c0.09,0,0.11,0.03,0.11,0.11c0,0.55,0,1.1,0,1.66c0,0.08-0.02,0.1-0.1,0.1
		c-0.71,0-1.41,0-2.12,0c-0.08,0-0.1-0.02-0.1-0.1c0-0.55,0-1.1,0-1.66c0-0.1,0.04-0.11,0.12-0.11
		C36.24,48.48,36.58,48.48,36.93,48.48z"/>
</g>
</svg>';
        $livelihoods = '<?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 27.3.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 82.96 81.92" style="enable-background:new 0 0 82.96 81.92;" xml:space="preserve">
<style type="text/css">
	.st0{fill:none;stroke:#DE212C;stroke-width:1.1339;stroke-miterlimit:10;}
	.st1{fill:none;stroke:#DE212C;stroke-width:0.5669;stroke-miterlimit:10;}
</style>
<g>
	<path class="st0" d="M35.49,42.98l-2.87-0.77c-3.07-0.82-6.23,1-7.06,4.07l-0.2,0.76l2.87,0.77c3.07,0.82,6.23-1,7.06-4.07l0,0
		L35.49,42.98z"/>
	<path class="st0" d="M34.85,49.59l2.87,0.77c3.07,0.82,6.23-1,7.06-4.07l0.2-0.76l-2.87-0.77c-3.07-0.82-6.23,1-7.06,4.07l0,0
		L34.85,49.59z"/>
	<path class="st0" d="M44.33,52.13l2.87,0.77c3.07,0.82,6.23-1,7.06-4.07l0,0l0.2-0.76l-2.87-0.77c-3.07-0.82-6.23,1-7.06,4.07
		L44.33,52.13z"/>
	<path class="st0" d="M33.47,39.05l2.87,0.77l0.2-0.76c0.82-3.07-1-6.23-4.07-7.06l-2.87-0.77l-0.2,0.76
		C28.57,35.07,30.39,38.23,33.47,39.05L33.47,39.05z"/>
	<path class="st0" d="M42.95,41.59l2.87,0.77l0.2-0.76c0.82-3.07-1-6.23-4.07-7.06l-2.87-0.77l-0.2,0.76
		C38.06,37.61,39.88,40.77,42.95,41.59L42.95,41.59z"/>
	<path class="st0" d="M52.44,44.13l2.87,0.77l0.2-0.76c0.82-3.07-1-6.23-4.07-7.06l0,0l-2.87-0.77l-0.2,0.76
		C47.54,40.15,49.36,43.31,52.44,44.13z"/>
	<path class="st0" d="M64.37,49.02c0.23-0.87-0.28-1.77-1.16-2l0,0l-5.8-1.55l-0.85,3.16l5.8,1.55
		C63.23,50.41,64.13,49.9,64.37,49.02L64.37,49.02z"/>
	<path class="st0" d="M18.31,41.76c-0.87-0.23-1.77,0.28-2,1.16s0.28,1.77,1.16,2l4.22,1.13c0.87,0.24,1.77-0.28,2.01-1.15
		c0.24-0.87-0.28-1.77-1.15-2.01c0,0,0,0-0.01,0L18.31,41.76z"/>
	<path class="st0" d="M20.85,32.28l4.22,1.13c0.87,0.23,1.77-0.28,2-1.16c0.23-0.87-0.28-1.77-1.16-2l-4.22-1.13
		c-0.87-0.23-1.77,0.29-2,1.16C19.46,31.15,19.98,32.04,20.85,32.28z"/>
	<path class="st0" d="M26.53,40.58c0.87,0.23,1.77-0.29,2-1.16s-0.28-1.77-1.16-2l-11.59-3.11c-0.87-0.23-1.77,0.28-2,1.16
		s0.28,1.77,1.16,2L26.53,40.58z"/>
</g>
<g>
	<path class="st1" d="M50.51,26.58l-0.98-1.19c-1.05-1.28-2.94-1.46-4.22-0.41L45,25.23l0.98,1.19c1.05,1.28,2.94,1.46,4.22,0.41
		l0,0L50.51,26.58z"/>
	<path class="st1" d="M48.24,29.18l0.98,1.19c1.05,1.28,2.94,1.46,4.22,0.41l0.32-0.26l-0.98-1.19c-1.05-1.28-2.94-1.46-4.22-0.41
		l0,0L48.24,29.18z"/>
	<path class="st1" d="M51.48,33.13l0.98,1.19c1.05,1.28,2.94,1.46,4.22,0.41l0,0L57,34.47l-0.98-1.19
		c-1.05-1.28-2.94-1.46-4.22-0.41L51.48,33.13z"/>
	<path class="st1" d="M50.85,24.31l0.98,1.19l0.32-0.26c1.28-1.05,1.46-2.94,0.41-4.22l-0.98-1.19l-0.32,0.26
		C49.98,21.14,49.8,23.03,50.85,24.31L50.85,24.31z"/>
	<path class="st1" d="M54.09,28.25l0.98,1.19l0.32-0.26c1.28-1.05,1.46-2.94,0.41-4.22l-0.98-1.19l-0.32,0.26
		C53.22,25.08,53.04,26.97,54.09,28.25L54.09,28.25z"/>
	<path class="st1" d="M57.33,32.2l0.98,1.19l0.32-0.26c1.28-1.05,1.46-2.94,0.41-4.22l0,0l-0.98-1.19l-0.32,0.26
		C56.47,29.03,56.28,30.92,57.33,32.2z"/>
	<path class="st1" d="M60.9,37.87c0.36-0.3,0.42-0.83,0.12-1.2l0,0l-1.98-2.41l-1.32,1.08l1.98,2.41
		C60,38.12,60.54,38.17,60.9,37.87L60.9,37.87z"/>
	<path class="st1" d="M43.61,20.86c-0.3-0.36-0.84-0.42-1.2-0.12s-0.42,0.84-0.12,1.2l1.44,1.75c0.3,0.36,0.83,0.42,1.2,0.12
		c0.36-0.3,0.42-0.83,0.12-1.2l0,0L43.61,20.86z"/>
	<path class="st1" d="M47.56,17.62L49,19.37c0.3,0.36,0.84,0.42,1.2,0.12s0.42-0.84,0.12-1.2l-1.44-1.75
		c-0.3-0.36-0.84-0.41-1.2-0.11C47.31,16.72,47.26,17.26,47.56,17.62z"/>
	<path class="st1" d="M47.45,22.85c0.3,0.36,0.84,0.41,1.2,0.11s0.41-0.83,0.12-1.2l-3.96-4.82c-0.3-0.36-0.84-0.42-1.2-0.12
		s-0.42,0.84-0.12,1.2L47.45,22.85z"/>
</g>
</svg>';
        $risk = '<?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 27.3.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 82.96 81.92" style="enable-background:new 0 0 82.96 81.92;" xml:space="preserve">
<style type="text/css">
	.st0{fill:none;stroke:#DE212C;stroke-width:1.4173;stroke-miterlimit:10;}
	.st1{fill:#DE212C;}
</style>
<g>
	<g>
		<circle class="st0" cx="31.32" cy="21.06" r="3.69"/>
		<path class="st0" d="M61.79,17.37H41.48c-1.02,0-1.85,0.83-1.85,1.85v7.39H31.3c-6.83,0-11.98,4.76-11.98,11.08
			c0,1.02,0.83,1.85,1.85,1.85s1.85-0.83,1.85-1.85c0-2.96,1.55-5.05,3.69-6.23v12.79c0,0.03,0.01,0.05,0.01,0.08
			c0,0.03-0.01,0.05-0.01,0.08v15.45c0,1.02,0.83,1.85,1.85,1.85s1.85-0.83,1.85-1.85V45.99h1.85v13.85c0,1.02,0.83,1.85,1.85,1.85
			s1.85-0.83,1.85-1.85V44.4c0-0.03-0.01-0.05-0.01-0.08c0-0.03,0.01-0.05,0.01-0.08V30.29h3.69v6.46c0,1.02,0.83,1.85,1.85,1.85
			h20.32c1.02,0,1.85-0.83,1.85-1.85V19.21C63.64,18.19,62.81,17.37,61.79,17.37z M47.02,26.6h-3.69v-5.54h16.62v13.85H43.33v-4.62
			h3.69c1.02,0,1.85-0.83,1.85-1.85C48.87,27.43,48.04,26.6,47.02,26.6z"/>
	</g>
	<g>
		<path class="st1" d="M51.71,28.8c0,0.45,0.37,0.82,0.82,0.82h3.27c0.45,0,0.82-0.37,0.82-0.82s-0.37-0.82-0.82-0.82h-3.27
			C52.08,27.99,51.71,28.35,51.71,28.8z"/>
		<path class="st1" d="M54.17,26.15c0.23,0,0.41-0.18,0.41-0.41v-2.25c0-0.23-0.18-0.41-0.41-0.41s-0.41,0.18-0.41,0.41v2.25
			C53.76,25.96,53.94,26.15,54.17,26.15z"/>
		<path class="st1" d="M56.62,26.96c0.1,0,0.21-0.04,0.29-0.12l1.43-1.43c0.16-0.16,0.16-0.42,0-0.58s-0.42-0.16-0.58,0l-1.43,1.43
			c-0.16,0.16-0.16,0.42,0,0.58C56.41,26.92,56.52,26.96,56.62,26.96z"/>
		<path class="st1" d="M51.43,26.84c0.08,0.08,0.18,0.12,0.29,0.12s0.21-0.04,0.29-0.12c0.16-0.16,0.16-0.42,0-0.58l-1.43-1.43
			c-0.16-0.16-0.42-0.16-0.58,0c-0.16,0.16-0.16,0.42,0,0.58L51.43,26.84z"/>
		<path class="st1" d="M57.75,32.89h-7.16c-0.73,0-1.33-0.59-1.33-1.33l0,0c0-0.73,0.59-1.33,1.33-1.33h7.16
			c0.73,0,1.33,0.59,1.33,1.33l0,0C59.07,32.3,58.48,32.89,57.75,32.89z"/>
	</g>
</g>
</svg>';
        $humanitarian = '<?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 27.3.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 82.96 81.92" style="enable-background:new 0 0 82.96 81.92;" xml:space="preserve">
<style type="text/css">
	.st0{fill:none;stroke:#DE212C;stroke-width:1.4173;stroke-miterlimit:10;}
	.st1{fill:none;stroke:#DE212C;stroke-miterlimit:10;}
</style>
<g>
	<path class="st0" d="M45.02,41.25l5.58-5.52c0.6-0.61,1.56-0.61,2.16,0s0.6,1.59,0,2.2l-2.78,2.67c-0.35,0.35-0.35,0.93,0,1.28
		s0.91,0.35,1.26,0l3.44-3.68V26.48c0-1.21,1.01-2.2,2.2-2.2s2.2,0.98,2.2,2.2v12.75c0,0.58-0.23,1.14-0.63,1.56l-8.16,8.41v6.6
		h-6.6v-11C43.68,43.34,44.06,42.22,45.02,41.25z"/>
	<path class="st0" d="M37.94,41.25l-5.58-5.52c-0.6-0.61-1.56-0.61-2.16,0s-0.6,1.59,0,2.2l2.78,2.67c0.35,0.35,0.35,0.93,0,1.28
		s-0.91,0.35-1.26,0l-3.44-3.68V26.48c0-1.21-1.01-2.2-2.2-2.2s-2.2,0.98-2.2,2.2v12.75c0,0.58,0.23,1.14,0.63,1.56l8.16,8.41v6.6
		h6.6v-11C39.28,43.34,38.9,42.22,37.94,41.25z"/>
</g>
<g>
	<path class="st1" d="M32.96,29.36v1.61h3.76v-0.48c0-1.58,0.77-3.02,1.94-3.97c-0.6-0.45-1.34-0.71-2.11-0.71
		C34.63,25.8,32.96,27.39,32.96,29.36z"/>
	<path class="st1" d="M50.8,30.96v-1.61c0-1.97-1.67-3.56-3.58-3.56c-0.77,0-1.51,0.26-2.11,0.71c1.17,0.95,1.94,2.39,1.94,3.97
		v0.48h3.75V30.96z"/>
	<path class="st1" d="M46.11,30.96v-0.48c0-1.36-0.67-2.56-1.68-3.33c-0.72-0.54-1.61-0.87-2.55-0.87c-0.93,0-1.83,0.32-2.55,0.87
		c-1.01,0.77-1.68,1.97-1.68,3.33v0.48v1.41h8.45L46.11,30.96L46.11,30.96z"/>
	<circle class="st1" cx="41.88" cy="22.98" r="2.35"/>
	<circle class="st1" cx="36.72" cy="22.98" r="1.88"/>
	<circle class="st1" cx="47.05" cy="22.98" r="1.88"/>
</g>
</svg>';

        $doings = [
            ['title_ar' => 'الإغاثة', 'title_en' => 'Relief', 'icon' => $relief],
            ['title_ar' => 'الخدمات الطبية', 'title_en' => 'Medical Services', 'icon' => $medical],
            ['title_ar' => 'الخدمات الطبية الطارئة', 'title_en' => 'Emergency Medical Services', 'icon' => $emergency],
            ['title_ar' => 'الخدمات المجتمعية والحماية', 'title_en' => 'Community Services and Protection', 'icon' => $community],
            ['title_ar' => 'المياه وإعادة التأهيل', 'title_en' => 'Water and Rehabilitation', 'icon' => $water],
            ['title_ar' => 'المساعدات النقدية والقسائم', 'title_en' => 'Cash and Vouchers', 'icon' => $cash],
            ['title_ar' => 'سبل العيش', 'title_en' => 'Livelihoods', 'icon' => $livelihoods],
            ['title_ar' => 'التوعية بالمخاطر', 'title_en' => 'Risk Awareness', 'icon' => $risk],
            ['title_ar' => 'مشروع الدعم الإنساني', 'title_en' => 'Humanitarian Support Project', 'icon' => $humanitarian],
        ];
        Doing::insert($doings);
    }
}
