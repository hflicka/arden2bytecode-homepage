
SCP = 'C:\Program Files (x86)\PuTTY\pscp.exe'
IDENTITY_FILE = 'C:\Users\Owner\.ssh\sourceforge.ppk'
GIT = 'C:\Program Files (x86)\Git\bin\git.exe'

all: update-repo deploy

update-repo:
	${GIT} pull
	
deploy:
	${SCP} -i ${IDENTITY_FILE} README hflicka@web.sourceforge.net:/home/project-web/arden2bytecode/htdocs

