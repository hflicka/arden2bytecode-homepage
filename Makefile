# you'll need MSYSGit and cygwin or PuTTY to run this script under windows
ifeq ($(OS),Windows_NT)
	SCP = 'C:\Program Files (x86)\PuTTY\pscp.exe'
	IDENTITY_FILE = 'C:\Users\Owner\.ssh\sourceforge.ppk'
	GIT = 'C:\Program Files (x86)\Git\bin\git.exe'
	RSYNC = 'C:\cygwin\bin\rsync.exe'
	SFTP = ''
else
	SCP = scp
	IDENTITY_FILE = ~/.ssh/sourceforge
	GIT = git
	RSYNC = rsync
	SFTP = sftp
endif

all: update-repo deploy

update-repo:
	${GIT} pull
	
deploy:
	${RSYNC} -r --exclude='.git' htdocs deploy/
#	${SFTP}
	${SCP} -r -i ${IDENTITY_FILE} deploy/htdocs/* hflicka@web.sourceforge.net:/home/project-web/arden2bytecode/htdocs/

