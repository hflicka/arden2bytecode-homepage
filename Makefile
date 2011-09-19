# you'll need MSYSGit and cygwin or PuTTY to run this script under windows
ifneq ($(prog),cygwin)
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

clean:
	${RM} -r deploy

update-repo:
	${GIT} pull
	${GIT} submodule foreach ${GIT} pull origin master
	
deploy: clean
	${RSYNC} -r --exclude='.git' htdocs deploy/
#	${SFTP}
	${SCP} -r -i ${IDENTITY_FILE} deploy/htdocs/* web.sourceforge.net:/home/project-web/arden2bytecode/htdocs/
	${SCP} -r -i ${IDENTITY_FILE} deploy/htdocs/.htaccess web.sourceforge.net:/home/project-web/arden2bytecode/htdocs/.htaccess

