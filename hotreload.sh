
WATCH_DIR="./"  
SERVER_PID_FILE="swoole.pid"

reload_server() {
  if [ -f $SERVER_PID_FILE ]; then
    kill -USR1 $(cat $SERVER_PID_FILE)
    echo "Server reloaded!"
  fi
}

inotifywait -m -r -e modify,create,delete $WATCH_DIR | while read path _ file; do
  echo "Detected changes in $file. Reloading server..."
  reload_server
done
