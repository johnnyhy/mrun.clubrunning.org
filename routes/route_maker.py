from itertools import izip

with open('c:\\xampp\\htdocs\\mrun.clubrunning.org\\routes.txt', 'r') as routes, open('c:\\xampp\\htdocs\\mrun.clubrunning.org\\map_links.txt', 'r') as map_links:
	counter = 1
	first = True
	for name, links in izip(routes, map_links):

		if first:
			first = False
			continue
		with open(r'c:\\xampp\\htdocs\\mrun.clubrunning.org\\routes\\' + str(counter) + ".php", 'w') as route:
		
			download = name.split('~')[1].strip()
			map = links.split(',')[0]
			view_more = links.split(',')[1]
			
			html='''
<!DOCTYPE html>
<html lang='eng'>
	<body>
		<h1>''' + name.strip('\n') + '''</h1>
			
		<iframe width=100% height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src=''' + map + '''></iframe>
		</br><br><a href=''' + view_more + ''' target='_blank' class="btn-default btn-lg view_route"role='button'>More Route Data</a></body>
		<a href="routes/''' + str(counter) + '''.csv" download="''' + download + '''.csv"; class="btn-default btn-lg view_route"role='button'>Download Directions</a>
	</body>
</html>
'''

			route.write(html)
			counter+=1
	
