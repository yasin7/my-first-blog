from django.views import generic
from django.views.generic.edit import CreateView, UpdateView, DeleteView
from django.core.urlresolvers import reverse_lazy
from .models import Album, Song, Sliders, Works
from django.shortcuts import render, redirect
from django.contrib.auth import authenticate, login
from django.views.generic import View
from .forms import UserForm
from django.shortcuts import render
from django.utils import timezone

class IndexView(generic.ListView):
	template_name = 'music/index.html'
	context_object_name = 'Sliders'

	def get_queryset(self):
		return Sliders.objects.all()

	def get_context_data(self, **kwargs):
		context = super(IndexView, self).get_context_data(**kwargs)
		context['Works'] = Works.objects.all()
		return context

class DetailView(generic.DetailView):
	model = Album
	template_name = 'music/detail.html'

class AlbumCreate(CreateView):
	model = Album
	fields = ['artist', 'album_title', 'genre', 'album_logo']

class SongCreate(CreateView):
	model = Song
	fields = ['file_type', 'song_title']


class AlbumUpdate(UpdateView):
	model = Album
	fields = ['artist', 'album_title', 'genre', 'album_logo']

class AlbumDelete(DeleteView):
	model = Album
	success_url = reverse_lazy('music:index')

class SongsView(generic.ListView):
    template_name = 'music/songs.html'
    context_object_name = 'Sliders'

    def get_queryset(self):
        return Sliders.objects.all()

    
class UserFormView(View):
	form_class = UserForm
	template_name = 'music/registration_form.html'

	def get(self, request):
		form = self.form_class(None)
		return render(request, self.template_name, {'form': form})
	 
	def post(self, request):
		form = self.form_class(request.POST)

		if form.is_valid():

			user = form.save(commit=False)

			# cleaned (normalized) data

			username = form.cleaned_data['username']
			password = form.cleaned_data['password']
			user.set_password(password)
			user.save()

			user = authenticate(usernam=username, password=password)

			if user is not None:
				if user.is_active:
					login(request, user)
					return redirect('music:index')
		return render(request, self.template_name, {'form': form})